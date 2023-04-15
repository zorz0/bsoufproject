<?php

use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ProductSizeController;
use App\Http\Controllers\WebController;
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
    Route::get('/settings', function () {
        return view('admin.settings');
});
Route::get('/users', function () {
    return view('admin.Users.allUsers');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/dashboard/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/dashboard/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/dashboard/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/dashboard/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');


// Blog Routes
Route::get('/dashboard/posts', [App\Http\Controllers\Dashboard\BlogController::class, 'index'])->name('posts.index');
Route::get('/dashboard/addPost', [App\Http\Controllers\Dashboard\BlogController::class, 'create'])->name('posts.create');
Route::post('/dashboard/posts', [App\Http\Controllers\Dashboard\BlogController::class, 'store'])->name('posts.store');
Route::get('/dashboard/posts/edit/{id}', [App\Http\Controllers\Dashboard\BlogController::class, 'edit'])->name('posts.edit');
Route::post('/dashboard/posts/update/{id}', [App\Http\Controllers\Dashboard\BlogController::class, 'update'])->name('posts.update');
Route::get('/dashboard/poposts/{id}', [App\Http\Controllers\Dashboard\BlogController::class, 'destroy'])->name('posts.destroy');

//product
Route::get('product',[ProductController::class,'index'])->name('product');
Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product/store',[ProductController::class,'store'])->name('product.store');
Route::get('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('product/delete/{id}',[ProductController::class,'destroy'])->name('product.destroy');

//productSize
Route::get('productSize',[ProductSizeController::class,'index'])->name('productSize');
Route::get('productSize/create/{id}',[ProductSizeController::class,'create'])->name('productSize.create');
Route::post('productSize/store',[ProductSizeController::class,'store'])->name('productSize.store');





// Route::put('/settings/{id}/update', [SettingController::class, 'update'])->name('admin.settings.update');
