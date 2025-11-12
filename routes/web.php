<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.signin');
});

Route::get('/login', function () {
    return view('auth.signin');
})->name('login');

Route::post('/login', function () {
    // Handle login logic here
    // This will be connected to your authentication controller
});

Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

Route::get('/register', function () {
    return view('auth.signup');
})->name('register');

Route::post('/register', function () {
    // Handle registration logic here
    // This will be connected to your authentication controller
});
