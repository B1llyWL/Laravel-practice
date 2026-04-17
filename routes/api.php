<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;

Route::get('/country', [CountryController::class, 'index']);
Route::post('/country', [CountryController::class, 'store']);
Route::get('/country/{country}', [CountryController::class, 'show']);
Route::patch('/country/{country}', [CountryController::class, 'update']);
Route::delete('/country/{country}', [CountryController::class, 'destroy']);

Route::get('/city', [CityController::class, 'index']);
Route::post('/city', [CityController::class, 'store']);
Route::get('/city/{city}', [CityController::class, 'show']);
Route::patch('/city/{city}', [CityController::class, 'update']);
Route::delete('/city/{city}', [CityController::class, 'destroy']);
