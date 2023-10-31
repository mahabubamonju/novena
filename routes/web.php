<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


//frontend
Route::get('/', [HomeController::class, 'index'] )->name('home');


//backend/admin
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

// Category Route
Route::resource('categories', CategoryController::class);

// Product Route
Route::resource('products', ProductController::class);