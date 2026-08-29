<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceFaq;
use App\Models\ServiceGallery;
use App\Models\ServiceHighlight;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the security services.
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new security service.
     */
    public function create()
    {
        $categories = Category::where('status', 'active')->get();
        return view('admin.services.create', compact('categories'));
    }

    /**
     * Store a newly created security service in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $service = new Service();
        $service->category_id = $request->category_id;
        $service->name = $request->name;
        $service->slug = Str::slug($request->name);
        $service->short_description = $request->short_description;
        $service->long_description = $request->long_description;
        $service->status = $request->status;

        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/services/feature_images');
            $image->move($destinationPath, $name);
            $service->feature_image = 'uploads/services/feature_images/' . $name;
        }

        $service->save();

        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                $name = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/services/galleries');
                $image->move($destinationPath, $name);
                ServiceGallery::create([
                    'service_id' => $service->id,
                    'image' => 'uploads/services/galleries/' . $name,
                ]);
            }
        }

        // Save FAQs
        if ($request->filled('faq_question')) {
            foreach ($request->faq_question as $index => $question) {
                if (!empty($question) && !empty($request->faq_answer[$index])) {
                    ServiceFaq::create([
                        'service_id' => $service->id,
                        'question'   => $question,
                        'answer'     => $request->faq_answer[$index],
                    ]);
                }
            }
        }

        // Save Highlights (max 3)
        if ($request->filled('highlight_title')) {
            foreach (array_slice($request->highlight_title, 0, 3) as $index => $title) {
                if (!empty($title) && !empty($request->highlight_description[$index])) {
                    ServiceHighlight::create([
                        'service_id'  => $service->id,
                        'title'       => $title,
                        'description' => $request->highlight_description[$index],
                        'sort_order'  => $index + 1,
                    ]);
                }
            }
        }

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    /**
     * Show the form for editing the specified security service.
     */
    public function edit($id)
    {
        $service = Service::with('galleries', 'faqs', 'highlights')->findOrFail($id);
        $categories = Category::where('status', 'active')->get();
        return view('admin.services.edit', compact('service', 'categories'));
    }

    /**
     * Update the specified security service in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $service = Service::findOrFail($id);
        $service->category_id = $request->category_id;
        $service->name = $request->name;
        $service->slug = Str::slug($request->name);
        $service->short_description = $request->short_description;
        $service->long_description = $request->long_description;
        $service->status = $request->status;

        if ($request->hasFile('feature_image')) {
            // Delete old image if exists
            if ($service->feature_image && file_exists(public_path($service->feature_image))) {
                unlink(public_path($service->feature_image));
            }
            
            $image = $request->file('feature_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/services/feature_images');
            $image->move($destinationPath, $name);
            $service->feature_image = 'uploads/services/feature_images/' . $name;
        }

        $service->save();

        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                $name = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/services/galleries');
                $image->move($destinationPath, $name);

                ServiceGallery::create([
                    'service_id' => $service->id,
                    'image' => 'uploads/services/galleries/' . $name,
                ]);
            }
        }

        // Save new FAQs (add only; deletion handled via AJAX)
        if ($request->filled('faq_question')) {
            foreach ($request->faq_question as $index => $question) {
                if (!empty($question) && !empty($request->faq_answer[$index])) {
                    ServiceFaq::create([
                        'service_id' => $service->id,
                        'question'   => $question,
                        'answer'     => $request->faq_answer[$index],
                    ]);
                }
            }
        }

        // Sync Highlights (replace all, max 3)
        if ($request->filled('highlight_title')) {
            $service->highlights()->delete();
            foreach (array_slice($request->highlight_title, 0, 3) as $index => $title) {
                if (!empty($title) && !empty($request->highlight_description[$index])) {
                    ServiceHighlight::create([
                        'service_id'  => $service->id,
                        'title'       => $title,
                        'description' => $request->highlight_description[$index],
                        'sort_order'  => $index + 1,
                    ]);
                }
            }
        }

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified security service from storage.
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Delete feature image
        if ($service->feature_image && file_exists(public_path($service->feature_image))) {
            unlink(public_path($service->feature_image));
        }

        // Delete gallery images
        foreach ($service->galleries as $gallery) {
            if ($gallery->image && file_exists(public_path($gallery->image))) {
                unlink(public_path($gallery->image));
            }
            $gallery->delete();
        }

        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }

    /**
     * Delete a single gallery image.
     */
    public function deleteGalleryImage($id)
    {
        $gallery = ServiceGallery::findOrFail($id);
        if ($gallery->image && file_exists(public_path($gallery->image))) {
            unlink(public_path($gallery->image));
        }
        $gallery->delete();

        return response()->json(['success' => true]);
    }

    /**
     * Delete a single FAQ.
     */
    public function deleteFaq($id)
    {
        $faq = ServiceFaq::findOrFail($id);
        $faq->delete();

        return response()->json(['success' => true]);
    }
}
