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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('products')->group(function () {
    Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
    Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products_create');
    Route::post('/register', [App\Http\Controllers\ProductController::class, 'store'])->name('products_register');
    Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('products_edit');
    Route::put('/update', [App\Http\Controllers\ProductController::class, 'update'])->name('products_update');
    Route::delete('/delete', [App\Http\Controllers\ProductController::class, 'delete'])->name('products_delete');
});

Route::get('/urls', [App\Http\Controllers\UrlsController::class, 'index'])->name('urls');
