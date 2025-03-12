<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrayerRequestController;
use App\Http\Controllers\NewsletterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::get('/about', function () {
    return view('about');
});

Route::get('/prayerrequest', function () {
    return view('prayerrequest');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/contact', function () {
    return view('contact');
});



Route::get('/events', function () {
    return view('events');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/sermons', function () {
    return view('sermons');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/prayer-request', [PrayerRequestController::class, 'store'])->name('prayer.store');
Route::post('/subscribe', [NewsletterController::class, 'store'])->name('newsletter.subscribe');
