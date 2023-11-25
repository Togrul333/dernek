<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Frontend\IndexController;
use \App\Http\Controllers\Frontend\NewsController;
use \App\Http\Controllers\Frontend\DonationController;


Route::fallback(fn() => redirect(route('frontend.dashboard')));

Route::get('/', [IndexController::class, 'index'])->name('dashboard');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{news:slug}', [NewsController::class, 'detail'])->name('news.detail');

Route::get('/donations', [DonationController::class, 'index'])->name('donations');
Route::get('/donations/{donation:slug}', [DonationController::class, 'detail'])->name('donations.detail');
