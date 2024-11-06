<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register'); // Show registration form
Route::post('/register', [AuthController::class, 'register'])->name('register.submit'); // Handle registration submission
Route::get('/logout', [AuthController::class, 'logout'])->name('logout'); // Handle logout

// Home Route
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth'); // Home page for authenticated users


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {
    // Here you would typically handle form submission, e.g., save to the database or send an email
    // For now, let's assume the message is processed
    return redirect()->route('contact')->with('status', 'Message sent successfully!');
})->name('contact.submit');