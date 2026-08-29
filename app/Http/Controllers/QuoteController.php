<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QuoteController extends Controller
{
    /**
     * Store a newly created quote request in storage (Frontend).
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'product_id' => 'nullable|exists:products,id',
            'business_line' => ['required', Rule::in(['industrial_equipment', 'construction_equipment', 'construction_materials', 'food_beverage_equipment'])],
            'equipment_condition' => ['nullable', Rule::in(['new', 'used', 'either'])],
            'quantity' => 'nullable|string|max:100',
            'required_by' => 'nullable|date|after_or_equal:today',
            'message' => 'required|string',
        ]);

        try {
            $data = $request->only([
                'name', 'company_name', 'email', 'phone', 'country', 'product_id',
                'business_line', 'equipment_condition', 'quantity', 'required_by', 'message',
            ]);
            // Keep the legacy required column populated for existing database compatibility.
            $data['property_type'] = $data['business_line'];
            Quote::create($data);
            return response()->json([
                'status' => 'success',
                'message' => 'Your quote request has been sent successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }

    /**
     * Display a listing of the quote requests (Backend).
     */
    public function index()
    {
        $quotes = Quote::with('product')->latest()->get();
        return view('admin.quotes.index', compact('quotes'));
    }

    /**
     * Display the specified quote request (Backend).
     */
    public function show($id)
    {
        $quote = Quote::with('product')->findOrFail($id);
        return view('admin.quotes.show', compact('quote'));
    }

    /**
     * Remove the specified quote request from storage (Backend).
     */
    public function destroy($id)
    {
        $quote = Quote::findOrFail($id);
        $quote->delete();

        return redirect()->route('admin.quotes.index')->with('success', 'Quote request deleted successfully.');
    }
}
