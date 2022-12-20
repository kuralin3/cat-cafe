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

Route::get('/admin/blogs', 'App\Http\Controllers\Admin\AdminBlogController@index')->name('admin.blogs.index');
Route::get('/admin/blogs/create', 'App\Http\Controllers\Admin\AdminBlogController@create')->name('admin.blogs.create');
Route::post('/admin/blogs', 'App\Http\Controllers\Admin\AdminBlogController@store')->name('admin.blogs.store');
Route::get('/admin/blogs/{blog}', 'App\Http\Controllers\Admin\AdminBlogController@edit')->name('admin.blogs.edit');
Route::put('/admin/blogs/{blog}', 'App\Http\Controllers\Admin\AdminBlogController@update')->name('admin.blogs.update');
Route::delete('/admin/blogs/{blog}', 'App\Http\Controllers\Admin\AdminBlogController@destroy')->name('admin.blogs.destroy');

Route::get('/admin/users/create', 'App\Http\Controllers\Admin\UserController@create')->name('admin.users.create');
Route::post('/admin/users', 'App\Http\Controllers\Admin\UserController@store')->name('admin.users.store');

// 認証
Route::get('/admin/login', 'App\Http\Controllers\Admin\AuthController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'App\Http\Controllers\Admin\AuthController@login');
Route::post('/admin/logout', 'App\Http\Controllers\Admin\AuthController@logout')->name('admin.logout');