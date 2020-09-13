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
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\AdvantageController;
use App\Http\Controllers\admin\TeacherController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\SubscriberController;


Route::get('/', [IndexController::class, 'index'])->name('index');

Route::put('register', [IndexController::class, 'register'])->name('register');
Route::put('message', [IndexController::class, 'message'])->name('message');
Route::put('subscribe', [IndexController::class, 'subscribe'])->name('subscribe');

Auth::routes(['register' => true]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function() {

    Route::get('/', [AdminController::class, 'index'])->name('index');


    Route::group(['prefix' => 'course', 'as' => 'course.'], function () {
        Route::get('/', [CourseController::class, 'index'])->name('index');
        Route::get('create', [CourseController::class, 'create'])->name('create');
        Route::put('create', [CourseController::class, 'createStore'])->name('create');
        Route::get('update/{id}', [CourseController::class, 'update'])->name('update');
        Route::patch('update/{id}', [CourseController::class, 'updateStore'])->name('update');
        Route::delete('delete/{id}', [CourseController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'teacher', 'as' => 'teacher.'], function () {
        Route::get('/', [TeacherController::class, 'index'])->name('index');
        Route::get('create', [TeacherController::class, 'create'])->name('create');
        Route::put('create', [TeacherController::class, 'createStore'])->name('createStore');
        Route::get('update/{id}', [TeacherController::class, 'update'])->name('update');
        Route::patch('update/{id}', [TeacherController::class, 'updateStore'])->name('updateStore');
        Route::delete('delete/{id}', [TeacherController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'advantage', 'as' => 'advantage.'], function () {
        Route::get('/', [AdvantageController::class, 'index'])->name('index');
        Route::get('create', [AdvantageController::class, 'create'])->name('create');
        Route::put('create', [AdvantageController::class, 'createStore'])->name('createStore');
        Route::get('update/{id}', [AdvantageController::class, 'update'])->name('update');
        Route::patch('update/{id}', [AdvantageController::class, 'updateStore'])->name('updateStore');
        Route::delete('delete/{id}', [AdvantageController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'client', 'as' => 'client.'], function () {
        Route::get('/', [ClientController::class, 'index'])->name('index');
        Route::delete('delete/{id}', [ClientController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'message', 'as' => 'message.'], function () {
        Route::get('/', [MessageController::class, 'index'])->name('index');
        Route::delete('delete/{id}', [MessageController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'subscriber', 'as' => 'subscriber.'], function () {
        Route::get('/', [SubscriberController::class, 'index'])->name('index');
        Route::delete('delete/{id}', [SubscriberController::class, 'delete'])->name('delete');
    });

});
