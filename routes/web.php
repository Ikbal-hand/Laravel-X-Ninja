<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PmbController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::resource("/",controller: HomeController::class)->only("index");
Route::resource("/jurusan",JurusanController::class)->only("index");
Route::resource("/pmbonline",PmbController::class)->only("index");
Route::resource("/profile",ProfileController::class)->only("index");
