
<?php

use Illuminate\Support\Facades\Route;

// Home Page Route
Route::get('/', function () {
    return view('home');
});

// About Us Page Route
Route::get('/about', function () {
    return view('about');
});

// Contact Us Page Route
Route::get('/contact', function () {
    return view('contact');
});

// Gallery Page Route
Route::get('/gallery', function () {
    return view('gallery');
});

// Registration Page Route
Route::get('/register', function () {
    return view('register');
});

// Login Page Route
Route::get('/login', function () {
    return view('login');
});

