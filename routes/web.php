<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

// Authentication pages
Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('/auth/signup', function () {
    return view('auth.signup');
});

// Home page
Route::get('/index', function () {
    return view('index');
});

// Informational pages
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// Resource routes
Route::resource('products', ProductsController::class);
Route::resource('services', ServicesController::class);
Route::resource('blog', BlogController::class);