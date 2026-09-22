<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminJobApplicationController extends Controller
{
    public function index()
    {
        $applications = JobApplication::with('career')->latest()->get();
        return view('admin.job-applications.index', compact('applications'));
    }

    public function show($id)
    {
        $application = JobApplication::with('career')->findOrFail($id);
        
        // Mark as read
        if ($application->status === 'unread') {
            $application->update(['status' => 'read']);
        }
        
        return view('admin.job-applications.show', compact('application'));
    }

    public function destroy($id)
    {
        $application = JobApplication::findOrFail($id);

        if ($application->cv_path && file_exists(public_path($application->cv_path))) {
            unlink(public_path($application->cv_path));
        }

        $application->delete();
        
        return redirect()->route('admin.applications.index')->with('success', 'Application deleted successfully!');
    }
}
