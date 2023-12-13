<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});



Route::resource('mahasiswa',HomeController::class);
Route::resource("student", StudentController::class);

Route::get('/login', [AuthController::class, 'index'])->name('auth.login');

Route::get('/', function () {
    return redirect(route('auth.login'));
});
