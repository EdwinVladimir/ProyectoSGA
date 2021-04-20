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


//Route::get('/{any}', function () {
//    return view('index');
//})->where('any', '.*');
// Auth::routes();
//Route::get('', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('login');

Route::get('', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin');

///Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('register');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
