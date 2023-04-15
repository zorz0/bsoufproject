<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Cardcontroller;

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
})->name('index');


Route::get('/news', function () {
    return view('front.news');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/about', function () {
    return view('front.clean');
});

///web
Route::get ('/store',[WebController::class,'products'])->name('store');

Route::get ('/showProduct/{id}',[WebController::class,'showProduct'])->name('showProduct');

///end web

//card
// Route::get ('/card',[Cardcontroller::class,'index'])->name('card');
Route::get ('/card/store',[Cardcontroller::class,'store'])->name('card.store');
///end card

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
