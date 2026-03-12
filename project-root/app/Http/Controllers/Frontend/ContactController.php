<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactEnquiry;

class ContactController extends Controller
{
    /**
     * Show contact page.
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * Handle contact form submission.
     */
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:50',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        ContactEnquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'new'
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}