<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrayerRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'preferred_date',
        'preferred_time',
        'prayer_type',
        'prayer_request',
        'privacy_consent',
        'public_sharing'
    ];
}
