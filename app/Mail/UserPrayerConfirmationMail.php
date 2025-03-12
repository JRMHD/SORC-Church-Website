<?php

namespace App\Mail;

use App\Models\PrayerRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserPrayerConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $prayerRequest;

    public function __construct(PrayerRequest $prayerRequest)
    {
        $this->prayerRequest = $prayerRequest;
    }

    public function build()
    {
        return $this->subject('Prayer Request Received')
            ->view('emails.user_prayer_confirmation');
    }
}
