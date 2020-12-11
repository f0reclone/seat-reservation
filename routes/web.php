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

Route::get('', '\App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/adventssingen', '\App\Http\Controllers\BookingController@index')->name('booking.index');
Route::get('/impressum', '\App\Http\Controllers\LegalController@getImprint')->name('legal.imprint');
Route::get('/datenschutz', '\App\Http\Controllers\LegalController@getPrivacy')->name('legal.privacy');
