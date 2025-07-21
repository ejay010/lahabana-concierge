<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/contact', function (Request $request) {
    // Handle contact form submission
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ]);
    // Here you would typically send the email or save the contact form data
    Mail::to(env('BUSINESS_EMAIL'))->send(new \App\Mail\ContactSubmitted($validatedData));

    return redirect(route('contact.success'));
})->name('contact.submit');

Route::get('/contact/success', function () {
    return view('contact.success');
})->name('contact.success');    