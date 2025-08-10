<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('single-blog/{id}', [HomeController::class, 'show'])->name('single-blog');
Route::get('category/web-development', [HomeController::class, 'categories'])->name('category.web-development');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('registration', [AuthController::class, 'create'])->name('registration');
Route::get('profile/{id}', [AuthController::class, 'show'])->name('profile');