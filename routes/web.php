<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
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

