<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('index');
Route::post('/set-city', [CityController::class, 'setCity'])->name('set-city');

Route::get('/{city:slug}', [PageController::class, 'index'])->name('city.show');
Route::get('/{city:slug}/about', [PageController::class, 'about'])->name('about');
Route::get('/{city:slug}/news', [PageController::class, 'news'])->name('news');
