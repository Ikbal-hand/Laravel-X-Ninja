<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PmbController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\TautanController;
use App\Http\Middleware\EnsureRightRole;
use App\Http\Middleware\StatusCkeck;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::resource("/",controller: HomeController::class)->only("index");
Route::resource("/pmbonline",PmbController::class)->only("index");
Route::resource("/profile",ProfileController::class)->only("index");
Route::resource("/tautan",TautanController::class)->only("index");
Route::resource("/kehidupan-kampus",KampusController::class)->only("index");
Route::resource("/layanan",controller: LayananController::class)->only("index");


Route::middleware([StatusCkeck::class])->group(function () {
    // Route untuk login
    Route::post('/login', [SesionController::class, 'login'])->name('login');

    // Route untuk dashboard administrator
    Route::get('/dashboard-admin', [DashboardController::class, 'admin'])->name('dashboard-admin');

    // Route untuk dashboard calon mahasiswa
    Route::get('/dashboard-calon', [DashboardController::class, 'calon'])->name('dashboard-calon');
});



Route::prefix('profile')->group(function () {
    Route::resource("/", ProfileController::class)->only("index");
    Route::get('/tentang-sttc', [ProfileController::class, 'tentang'])->name('profile.tentang');
    Route::get('/statuta', [ProfileController::class, 'statuta'])->name('profile.statuta');
    Route::get('/organisasi', [ProfileController::class, 'organisasi'])->name('profile.organisasi');
    Route::get('/sk-kode-etik', [ProfileController::class, 'skKodeEtik'])->name('profile.sk_kode_etik');
    Route::get('/akreditasi', [ProfileController::class, 'akreditasi'])->name('profile.akreditasi');
});

// Route untuk Kehidupan Kampus
Route::prefix('kehidupan-kampus')->group(function () {
    Route::resource("/", KampusController::class)->only("index");
    Route::get('/ormawa', [KampusController::class, 'ormawa'])->name('kehidupan.ormawa');
    Route::get('/fasilitas', [KampusController::class, 'fasilitas'])->name('kehidupan.fasilitas');
});

// Route untuk Layanan
Route::prefix('layanan')->group(function () {
    Route::resource("/", LayananController::class)->only("index");
    Route::get('/perpustakaan', [LayananController::class, 'perpustakaan'])->name('layanan.perpustakaan');
    Route::get('/jurnal', [LayananController::class, 'jurnal'])->name('layanan.jurnal');
    Route::get('/lppm', [LayananController::class, 'lppm'])->name('layanan.lppm');
    Route::get('/upm', [LayananController::class, 'upm'])->name('layanan.upm');
});

// Route untuk PMB Online
Route::prefix('pmbonline')->group(function () {
    Route::resource("/", PmbController::class)->only("index");
    Route::get('/register', [PmbController::class, 'register'])->name('pmbonline.register');
    Route::get('/persyaratan', [PmbController::class, 'persyaratan'])->name('pmbonline.persyaratan');
});


// Miscellaneous Route
Route::get('/dropdown-hover', function () {
    return view('dropdown-hover');
});
