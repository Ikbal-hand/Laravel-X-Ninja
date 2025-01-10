<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PmbController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TautanController;
use Illuminate\Support\Facades\Route;
Route::resource("/",controller: HomeController::class)->only("index");
Route::resource("/pmbonline",PmbController::class)->only("index");
Route::resource("/profile",ProfileController::class)->only("index");
Route::resource("/tautan",TautanController::class)->only("index");
Route::resource("/kehidupan-kampus",KampusController::class)->only("index");
Route::resource("/layanan",LayananController::class)->only("index");


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dropdown-hover', function () {
    return view('dropdown-hover');
});
