<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Order;
use App\Models\Product;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/priceList', function () {
    $products = Product::all();
    return view('priceList', ['products' => $products]);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/orders', [OrderController::class, 'showOrders'])->name('orders.show');
});
// NIE RUSZAC
Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::get('/home', [ProductController::class, 'index'])->name('products.home');

Route::resource('products', ProductController::class);

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login')->name('login');
    Route::post('/auth/login', 'authenticate')->name('login.authenticate');
    Route::get('/auth/logout', 'logout')->name('logout');
});



