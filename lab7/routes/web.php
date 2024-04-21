<?php

use App\Http\Controllers\TripController;
use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('countries', CountryController::class);

Route::resource('create', CountryController::class);


Route::controller(TripController::class)->group(function () {
    Route::get('/trips', 'index')->name('trips.index');
});


Route::resource('trips', TripController::class);

