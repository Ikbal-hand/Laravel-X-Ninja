<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkreditasiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PmbController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkController;
use App\Http\Controllers\StatutaController;
use App\Http\Controllers\TautanController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrmawaController;
use App\Models\news_report;

Route::resource("/",controller: HomeController::class)->only("index");
Route::resource("/pmbonline",PmbController::class)->only("index");
Route::resource("/auth",AuthController::class)->only("index");
Route::resource("/profile",ProfileController::class)->only("index");
Route::resource("/tautan",TautanController::class)->only("index");
Route::resource("/kehidupan-kampus",KampusController::class)->only("index");
Route::resource("/layanan",LayananController::class)->only("index");
Route::resource("/mahasiswa-help",MahasiswaController::class)->only("index");

// Route untuk Home
Route::resource("/", HomeController::class)->only("index");

Route::get('/reports', function(){
    return response()->json(news_report::all());
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'post'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk Profile
Route::prefix('profile')->group(function () {
    Route::resource("/", ProfileController::class)->only("index");
    Route::get('/tentang-sttc', [TentangController::class, 'index'])->name('profile.tentang');
    Route::get('/statuta', [StatutaController::class, 'index'])->name('profile.statuta');
    Route::get('/organisasi', [OrganisasiController::class, 'index'])->name('profile.organisasi');
    Route::get('/sk-kode-etik', [SkController::class, 'index'])->name('profile.sk_kode_etik');
    Route::get('/akreditasi', [AkreditasiController::class, 'index'])->name('profile.akreditasi');
});

// Route untuk Kehidupan Kampus
Route::prefix('kehidupan-kampus')->group(function () {
    Route::resource("/", KampusController::class)->only("index");
    Route::get('/ormawa', [OrmawaController::class, 'index'])->name('kehidupan.ormawa');
    Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('kehidupan.fasilitas');
});

// Route untuk Layanan
Route::prefix('layanan')->group(function () {
    Route::resource("/", LayananController::class)->only("index");
     Route::get("/mahasiswa-help", [MahasiswaController::class,'index'])->name("mahasiswa-help");
});

// Route untuk PMB Online
Route::prefix('pmbonline')->group(function () {
    Route::resource("/", PmbController::class)->only("index");
    Route::get('/register', [AuthController::class, 'registration'])->name('pmbonline.register');
    Route::get('/persyaratan', [PmbController::class, 'persyaratan'])->name('pmbonline.persyaratan');
});

// Route untuk Mahasiswa-help
Route::prefix('/mahasiswa-help')->group(function () {
    Route::resource("/mahasiswa-help", MahasiswaController::class)->only("index");
    Route::get('/upload', [MahasiswaController::class, 'upload'])->name('mahasiswa-help.upload');


});


// Miscellaneous Route
Route::get('/dropdown-hover', function () {
    return view('dropdown-hover');
});
