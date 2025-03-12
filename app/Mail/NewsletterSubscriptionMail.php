<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterSubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $type;
    public $email;

    public function __construct($type, $email)
    {
        $this->type = $type;
        $this->email = $email;
    }

    public function build()
    {
        if ($this->type === 'subscriber') {
            return $this->subject('Thank You for Subscribing!')
                ->view('emails.subscriber-thank-you')
                ->with(['email' => $this->email]);
        } else {
            return $this->subject('New Newsletter Subscription')
                ->view('emails.admin-notification')
                ->with(['email' => $this->email]);
        }
    }
}
