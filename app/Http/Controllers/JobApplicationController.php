<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'career_id' => 'required|exists:careers,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB Max
            'message' => 'nullable|string'
        ]);

        $cvPath = '';
        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $name = time() . '_' . str_replace(' ', '_', $file->getClientOriginalName());
            $destinationPath = public_path('/uploads/resumes');
            $file->move($destinationPath, $name);
            $cvPath = 'uploads/resumes/' . $name;
        }

        JobApplication::create([
            'career_id' => $validated['career_id'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'cv_path' => $cvPath,
            'message' => $validated['message'] ?? null,
        ]);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Your application has been submitted successfully!'
            ]);
        }

        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
}
