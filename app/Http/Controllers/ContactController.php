<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        // Save to the database
        $contact = Contact::create($request->all());

        // Send email notification
        Mail::send(new ContactMail($request->all()));

        // Return JSON response for AJAX
        return response()->json(['success' => 'Your message has been sent successfully!']);
    }
}
