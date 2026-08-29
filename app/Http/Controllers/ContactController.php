<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSubmissionMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|string|max:125',
            'lname' => 'required|string|max:125',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create([
            'name' => $validated['fname'] . ' ' . $validated['lname'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'subject' => $validated['subject'] ?? 'New Contact Inquiry',
            'message' => $validated['message'],
        ]);

        // Send email to admin@diamondlandscapes
        try {
            // Mail::to('admin@diamondlandscapes')->send(new ContactSubmissionMail($contact));
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            \Log::error('Mail sending failed: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
