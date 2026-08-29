<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    /**
     * Display a listing of careers.
     */
    public function index()
    {
        $careers = Career::latest()->get();
        return view('admin.careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new career.
     */
    public function create()
    {
        return view('admin.careers.create');
    }

    /**
     * Store a newly created career in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'job_type' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'salary' => 'nullable|string|max:255',
            'salary_unit' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $career = new Career();
        $career->title = $request->title;
        $career->slug = Str::slug($request->title);
        $career->job_type = $request->job_type;
        $career->category = $request->category;
        $career->salary = $request->salary;
        $career->salary_unit = $request->salary_unit;
        $career->location = $request->location;
        $career->short_description = $request->short_description;
        $career->description = $request->description;
        $career->status = $request->status;
        $career->is_urgent = $request->has('is_urgent');

        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/careers');
            $image->move($destinationPath, $name);
            $career->feature_image = 'uploads/careers/' . $name;
        }

        $career->save();

        return redirect()->route('careers.index')->with('success', 'Career created successfully.');
    }

    /**
     * Show the form for editing the specified career.
     */
    public function edit($id)
    {
        $career = Career::findOrFail($id);
        return view('admin.careers.edit', compact('career'));
    }

    /**
     * Update the specified career in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'job_type' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'salary' => 'nullable|string|max:255',
            'salary_unit' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $career = Career::findOrFail($id);
        $career->title = $request->title;
        $career->slug = Str::slug($request->title);
        $career->job_type = $request->job_type;
        $career->category = $request->category;
        $career->salary = $request->salary;
        $career->salary_unit = $request->salary_unit;
        $career->location = $request->location;
        $career->short_description = $request->short_description;
        $career->description = $request->description;
        $career->status = $request->status;
        $career->is_urgent = $request->has('is_urgent');

        if ($request->hasFile('feature_image')) {
            // Delete old image if exists
            if ($career->feature_image && file_exists(public_path($career->feature_image))) {
                unlink(public_path($career->feature_image));
            }
            
            $image = $request->file('feature_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/careers');
            $image->move($destinationPath, $name);
            $career->feature_image = 'uploads/careers/' . $name;
        }

        $career->save();

        return redirect()->route('careers.index')->with('success', 'Career updated successfully.');
    }

    /**
     * Remove the specified career from storage.
     */
    public function destroy($id)
    {
        $career = Career::findOrFail($id);

        // Delete feature image
        if ($career->feature_image && file_exists(public_path($career->feature_image))) {
            unlink(public_path($career->feature_image));
        }

        $career->delete();

        return redirect()->route('careers.index')->with('success', 'Career deleted successfully.');
    }
}
