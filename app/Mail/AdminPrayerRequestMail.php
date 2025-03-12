<?php

namespace App\Mail;

use App\Models\PrayerRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminPrayerRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $prayerRequest;

    public function __construct(PrayerRequest $prayerRequest)
    {
        $this->prayerRequest = $prayerRequest;
    }

    public function build()
    {
        return $this->subject('New Prayer Request Received')
            ->view('emails.admin_prayer_request');
    }
}
