<?php

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

Route::get('/adventssingen', '\App\Http\Controllers\BookingController@index')->name('booking.index');
Route::post('/adventssingen', '\App\Http\Controllers\BookingController@post')->name('booking.post');
Route::get('/angemeldet', '\App\Http\Controllers\BookingController@success')->name('booking.success');
