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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
//Quality Router
Route::get('/quality', [App\Http\Controllers\QualityController::class, 'index'])->name('quality');
Route::get('/quality/create', [App\Http\Controllers\QualityController::class, 'create'])->name('quality.create');
Route::post('/quality/store', [App\Http\Controllers\QualityController::class, 'store'])->name('quality.store');
Route::get('/quality/edit/{id}', [App\Http\Controllers\QualityController::class, 'edit'])->name('quality.edit');
Route::post('/quality/update/{id}', [App\Http\Controllers\QualityController::class, 'update'])->name('quality.update');
Route::get('/quality/delete/{id}', [App\Http\Controllers\QualityController::class, 'delete'])->name('quality.delete');
