<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PmbController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TautanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SiteManagementController;
use App\Http\Controllers\Admin\PenerimaanMahasiswaController;
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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'post'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk Profile
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
// Route untuk Kehidupan Kampus
Route::prefix('kehidupan-kampus')->group(function () {
    Route::resource("/login", AuthController::class)->only("index");
    Route::resource("/registration", AuthController::class)->only("index");

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

// Route untuk Mahasiswa-help
Route::prefix('/mahasiswa-help')->group(function () {
    Route::resource("/mahasiswa-help", MahasiswaController::class)->only("index");
    Route::get('/upload', [MahasiswaController::class, 'upload'])->name('mahasiswa-help.upload');


});


Route::prefix('admin')->middleware(['auth', 'admin'])->group(function() {
    // Site Management Routes
    Route::get('/fasilitas-kampus', [SiteManagementController::class, 'fasilitasKampus'])->name('admin.fasilitas');
    Route::get('/news-report', [SiteManagementController::class, 'newsReport'])->name('admin.news');
    Route::get('/organisasi-mahasiswa', [SiteManagementController::class, 'organisasiMahasiswa'])->name('admin.organisasi');

    // Penerimaan Mahasiswa Baru Routes
    Route::get('/daftar-calon-mahasiswa', [PenerimaanMahasiswaController::class, 'index'])->name('admin.calon-mahasiswa');
    Route::get('/detail-calon-mahasiswa/{id}', [PenerimaanMahasiswaController::class, 'show'])->name('admin.calon-mahasiswa.detail');
});


// Route untuk Login
// Route::resource("/login", LoginController::class)->only("index");
Route::post("/login/asadmin", [AdminController::class, "login"])->name("login.process");

// Miscellaneous Route
Route::get('/dropdown-hover', function () {
    return view('dropdown-hover');
});
