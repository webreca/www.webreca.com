<?php

use App\Http\Controllers\Guest\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('guest.home');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('guest.about-us');

Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('guest.portfolio');

Route::get('/services', [HomeController::class, 'services'])->name('guest.services');

Route::get('/service/{slug}', [HomeController::class, 'service'])->name('guest.service');

Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('guest.contact-us');

Route::post('/send-enquiry', [HomeController::class, 'sendEnquiry'])->name('guest.send-enquiry');

Route::get('/blogs', [HomeController::class, 'blogs'])->name('guest.blogs');

Route::get('/blog/{slug}', [HomeController::class, 'blog'])->name('guest.service');

Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('guest.testimonials');

Route::get('/technologies', [HomeController::class, 'technologies'])->name('guest.technologies');

Route::get('/technology/{slug}', [HomeController::class, 'technology'])->name('guest.technology/{slug}');
