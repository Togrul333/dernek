<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Frontend\IndexController;
use \App\Http\Controllers\Frontend\NewsController;
use \App\Http\Controllers\Frontend\DonationController;
use \App\Http\Controllers\Frontend\ContactController;
use \App\Http\Controllers\Frontend\LanguageController;
use \App\Http\Controllers\Frontend\VolunteerController;


Route::fallback(fn() => redirect(route('frontend.dashboard')));

Route::get('/', [IndexController::class, 'index'])->name('dashboard');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{news:slug}', [NewsController::class, 'detail'])->name('news.detail');

Route::get('/donations', [DonationController::class, 'index'])->name('donations');
Route::get('/donate', [DonationController::class, 'donate'])->name('donate');
Route::post('/make-donation/{donation}', [DonationController::class, 'index'])->name('make.donation');
Route::get('/donations/{donation:slug}', [DonationController::class, 'detail'])->name('donations.detail');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-form', [ContactController::class, 'contactForm'])->name('contactForm');

Route::get('/volunteer', [VolunteerController::class, 'index'])->name('volunteer');
Route::post('/volunteer-form', [VolunteerController::class, 'volunteerForm'])->name('volunteerForm');

//lang
Route::get('lang/{lang}', [LanguageController::class, 'changeLanguage'])->name('lang.switch');
