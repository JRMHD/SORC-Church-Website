<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscription;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterSubscriptionMail;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscriptions,email|max:255',
        ]);

        // Store in the database
        $subscription = NewsletterSubscription::create([
            'email' => $request->email,
        ]);

        // Send email to the subscriber
        Mail::to($request->email)->send(new NewsletterSubscriptionMail('subscriber', $request->email));

        // Send email to admin
        Mail::to('springsrestoration@gmail.com')->send(new NewsletterSubscriptionMail('admin', $request->email));

        return response()->json(['success' => 'Thank you for subscribing to our newsletter!']);
    }
}
