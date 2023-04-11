<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('front.home');
});
Route::get('/store', function () {
    return view('front.store');
});
Route::get('/news', function () {
    return view('front.news');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/about', function () {
    return view('front.clean');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
