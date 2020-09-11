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

use App\Http\Controllers\IndexController;


Route::get('/', [IndexController::class, 'index'])->name('index');

Route::put('register', [IndexController::class, 'register'])->name('register');
Route::put('message', [IndexController::class, 'message'])->name('message');
Route::put('subscribe', [IndexController::class, 'subscribe'])->name('subscribe');
