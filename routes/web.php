<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortUrlController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('Shortd/welcome');
});
Route::post('/shorten', [ShortUrlController::class, 'shorten']);
Route::get('/history', [ShortUrlController::class, 'history']);
Route::get('/{shortCode}', [ShortUrlController::class, 'redirect']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact');
