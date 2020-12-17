<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');

Route::get('/api/province/{id}/cities', [App\Http\Controllers\HomeController::class, 'getCities']);

Route::post('/api/cities', [App\Http\Controllers\HomeController::class, 'searchCities']);


