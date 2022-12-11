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

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact');
Route::post('/contact', 'App\Http\Controllers\ContactController@sendMail');
Route::get('/contact/complete', 'App\Http\Controllers\ContactController@complete')->name('contact.complete');