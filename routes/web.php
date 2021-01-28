<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\CountryStateCityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::get('country-state-city', [CountryStateCityController::class, 'index'])->name('country-state-city');
Route::post('get-states-by-country', [CountryStateCityController::class, 'getState']);
Route::post('get-cities-by-state', [CountryStateCityController::class, 'getCity']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
