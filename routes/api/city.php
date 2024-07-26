<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;

Route::delete('/cities/{city}', [CityController::class, 'destroy']);
Route::post('/cities', [CityController::class, 'store']);
