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
Route::get('/login', function () {
    return view('login');
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
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/admin', function () {
    return view('admin');
});
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
Route::post('/signup',[AuthController::class,'signup']);
Route::get('/login',[AuthController::class,'login']);
Route::post('/register-user',[AuthController::class,'registerUser'])->name
('register-user');
Route::post('/admin/check',[loginController::class,'logs']);
Route::post('/storebooking',[BookingController::class,'store']);
Route::post('/storecontact',[ContactController::class,'store']);

Route::get('/admin/bookingview',[BookingController::class ,'index']);
Route::get('/admin/fview',[ContactController::class ,'index']);
Route::get('/admin/fview',[ContactController::class ,'index']);
Route::get('/admin/bookingview',[BookingController::class ,'index']);
Route::get('delete/{id}',[ContactController::class ,'delete']);
Route::get('bdelete/{id}',[BookingController::class ,'delete']);

Route::get('/BookingAccepted',[BookingController::class ,'StatAccepted']);
Route::get('/BookingRejected',[BookingController::class ,'StatRejected']);

Route::get('/admin/logout',[ContactController::class,'logout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
