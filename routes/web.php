<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
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
// Route::resource("/login",LoginController::class)->only("index");
// Route::post("/login/asadmin",[AdminController::class,"login"])->name("login.proccess");



Route::get('/dropdown-hover', function () {
    return view('dropdown-hover');
});
