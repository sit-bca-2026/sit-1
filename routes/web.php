<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('contact', [ContactController::class, 'index']);
Route::post('contact/submit', [ContactController::class, 'store'])->name('submit-contact');
