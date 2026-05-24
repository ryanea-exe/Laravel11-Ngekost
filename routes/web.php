<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BoardingHouseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/check-booking', [BookingController::class, 'check'])
    ->name('check-booking');

Route::get('/find-kost', [BoardingHouseController::class, 'find'])
    ->name('find-kost');
Route::get('/find-results', [BoardingHouseController::class, 'findResults'])
    ->name('find-kost.results');

Route::get('/category/{slug}', [CategoryController::class, 'show'])
    ->name('category.show');

Route::get('/city/{slug}', [CityController::class, 'show'])
    ->name('city.show');
