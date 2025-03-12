<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrayerRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminPrayerRequestMail;
use App\Mail\UserPrayerConfirmationMail;

class PrayerRequestController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'location' => 'required|string|max:255',
            'preferred_date' => 'required|date',
            'preferred_time' => 'required',
            'prayer_type' => 'required|string',
            'prayer_request' => 'required|string',
            'privacy_consent' => 'required|boolean',
            'public_sharing' => 'nullable|boolean',
        ]);

        // Store in database
        $prayerRequest = PrayerRequest::create($validatedData);

        // Send emails
        Mail::to('springsrestoration@gmail.com')->send(new AdminPrayerRequestMail($prayerRequest));
        Mail::to($prayerRequest->email)->send(new UserPrayerConfirmationMail($prayerRequest));

        return response()->json(['success' => 'Your prayer request has been submitted. Thank you!']);
    }
}
