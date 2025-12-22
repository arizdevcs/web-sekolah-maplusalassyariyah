<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

// Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'about'])->name('about');
Route::get('/program', [HomeController::class, 'programs'])->name('programs');
Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');

// Pendaftaran
Route::prefix('pendaftaran')->group(function () {
    Route::get('/', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
    Route::post('/', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
    Route::get('/sukses/{nomor}', [PendaftaranController::class, 'sukses'])->name('pendaftaran.sukses');
    
    // Cek Status
    Route::get('/cek-status', [PendaftaranController::class, 'cekStatusForm'])->name('pendaftaran.cek-status');
    Route::post('/cek-status', [PendaftaranController::class, 'cekStatus'])->name('pendaftaran.cek-status.submit');
    
    // TAMBAHKAN INI: Route untuk halaman hasil status
    Route::get('/status/{id?}', function($id = null) {
        // Jika diakses langsung tanpa ID, redirect ke form cek status
        if (!$id) {
            return redirect()->route('pendaftaran.cek-status');
        }
        
        // Arahkan ke controller untuk handle
        return app()->make(PendaftaranController::class)->showStatus($id);
    })->name('pendaftaran.status');
    
    // TAMBAHKAN INI: Route untuk cetak bukti
    Route::get('/cetak/{id}', [PendaftaranController::class, 'cetak'])->name('pendaftaran.cetak');
    
    // TAMBAHKAN INI: Clear verifikasi (optional)
    Route::get('/clear-verifikasi', [PendaftaranController::class, 'clearVerifikasi'])
        ->name('pendaftaran.clear-verifikasi');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    // Login
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
    
    // Protected Admin Routes
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/pendaftaran/{id}', [DashboardController::class, 'show'])->name('admin.pendaftaran.show');
        Route::patch('/pendaftaran/{id}/status', [DashboardController::class, 'updateStatus'])->name('admin.pendaftaran.update-status');
        Route::delete('/pendaftaran/{id}', [DashboardController::class, 'destroy'])->name('admin.pendaftaran.delete');
        Route::get('/export', [DashboardController::class, 'export'])->name('admin.export');
        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
});