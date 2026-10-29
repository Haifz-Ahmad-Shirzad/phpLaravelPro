<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogController;

/* Home */
Route::get('/', fn() => view('pages.index'))->name('home');
Route::get('/index', fn() => view('pages.index'))->name('home.alias');

/* Auth (placeholder — Week 10) */
Route::get('/auth/login', fn() => view('auth.login'))->name('login');
Route::get('/auth/signup', fn() => view('auth.signup'))->name('signup');

/* Informational */
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

/* Resources */
Route::resource('products', ProductController::class);
Route::resource('services', ServicesController::class);
Route::resource('blog', BlogController::class);