<?php

use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\SettingController;
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

// Route::get('/', function () {
//     return view('admin.index');
// });

Route::get('/index', [IndexController::class, 'index'])->name('admin');
Route::get('/settings', [SettingController::class, 'index']);
Route::get('/users', function () {
    return view('admin.Users.allUsers'); 
});
Route::put('/settings/{id}/update', 
[SettingController::class, 'update'])
->name('admin.settings.update');
