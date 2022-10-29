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
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/trips', function () {
    return view('trips');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/trip', function () {
    return view('single-trip');
});
Route::get('/single-blog', function () {
    return view('single-blog');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/reg', function () {
    return view('register');
});
