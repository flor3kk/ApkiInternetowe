<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;


Route::get('/trips', [TripController::class, 'index']);


Route::get('/trips/{id}', [TripController::class, 'show'])->name('trips.show');

Route::get('/', function () {
    return view('welcome');
});

