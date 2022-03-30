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
    return view('welcome');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/vivo', function () {
    return view('vivo');
});
Route::get('/samsung', function () {
    return view('samsung');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/apple', function () {
    return view('apple');
});
Route::get('/oneplus', function () {
    return view('oneplus');
});
Route::get('/oppo', function () {
    return view('oppo');
});
