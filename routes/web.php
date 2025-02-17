<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('students', StudentController::class);

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::resource('students', StudentController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
