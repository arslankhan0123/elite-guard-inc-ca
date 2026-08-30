<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Career;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 'active')->latest()->take(15)->get();
        $services = Service::where('status', 'active')->with(['category', 'highlights'])->latest()->get();
        $categories = \App\Models\Category::where('status', 'active')->get();
        return view('welcome', compact('products', 'services', 'categories'));
    }

    public function careers()
    {
        $careers = Career::where('status', 'active')->latest()->get();
        return view('frontend.careers.index', compact('careers'));
    }

    public function careerDetails($slug)
    {
        $career = Career::where('slug', $slug)->firstOrFail();
        return view('frontend.careers.details', compact('career'));
    }

    public function about()
    {
        $products = Product::where('status', 'active')->latest()->get();
        return view('frontend.about.index', compact('products'));
    }

    public function industries()
    {
        return view('frontend.industries.index');
    }

    public function globalSourcing()
    {
        return view('frontend.global-sourcing.index');
    }

    public function projects()
    {
        return view('frontend.projects.index');
    }

    public function partnersVendors()
    {
        return view('frontend.partners-vendors.index');
    }

    public function contact()
    {
        $services = Service::where('status', 'active')->latest()->get();
        return view('frontend.contact.index', compact('services'));
    }

    public function gallery()
    {
        return view('frontend.gallery.index');
    }

    public function reviews()
    {
        return view('frontend.reviews.index');
    }

    public function quote()
    {
        $services = Service::where('status', 'active')->orderBy('name')->get();
        return view('frontend.quote.index', compact('services'));
    }

    public function faq()
    {
        return view('frontend.faq.index');
    }

    public function services(Request $request)
    {
        $query = Service::where('status', 'active');
        $selected_category = null;

        if ($request->has('category')) {
            $selected_category = \App\Models\Category::where('slug', $request->category)->first();
            if ($selected_category) {
                $query->where('category_id', $selected_category->id);
            }
        }

        $services = $query->latest()->get();
        return view('frontend.services.index', compact('services', 'selected_category'));
    }

    public function servicesDetails($id)
    {
        $service = Service::with('galleries', 'faqs', 'highlights')->findOrFail($id);
        $services = Service::where('status', 'active')->where('category_id', $service->category_id)->latest()->take(3)->get();

        $prevService = Service::where('status', 'active')->where('id', '<', $id)->orderBy('id', 'desc')->first();
        $nextService = Service::where('status', 'active')->where('id', '>', $id)->orderBy('id', 'asc')->first();

        return view('frontend.services.details', compact('service', 'services', 'prevService', 'nextService'));
    }

    public function productsDetails($id)
    {
        $product = Product::with('category', 'galleries')
            ->where('status', 'active')
            ->findOrFail($id);

        $relatedProducts = Product::where('status', 'active')
            ->where('category_id', $product->category_id)
            ->whereKeyNot($product->id)
            ->orderBy('name')
            ->take(6)
            ->get();

        return view('frontend.products.details', compact('product', 'relatedProducts'));
    }

    public function privacyPolicy()
    {
        return view('frontend.legal.privacy');
    }

    public function refundPolicy()
    {
        return view('frontend.legal.refund');
    }

    public function termsConditions()
    {
        return view('frontend.legal.terms');
    }
}
