<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

//Route::resource('contacts', ContactController::class);
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

Route::resource('categories', 'CategoryController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categpries', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.list');
Route::get('/categories/crete', [\App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}/update', [\App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}/delete', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.delete');

Route::resource('posts', \App\Http\Controllers\PostController::class);