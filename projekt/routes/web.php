<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// NIE RUSZAC

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/home', [ProductController::class, 'index'])->name('products.home');

Route::resource('products', ProductController::class);
