<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\ArsipController;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\BeritaTerbaruItemController;
use App\Http\Controllers\Admin\JejakPergerakanController;
use App\Http\Controllers\Admin\JejakPergerakanItemController;
use App\Http\Controllers\Admin\KontenController;
use App\Http\Middleware\LogAdminRequests;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'isadmin', LogAdminRequests::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::resource('anggota', AnggotaController::class)->parameters(['anggota' => 'anggota']);
    Route::resource('agenda', AgendaController::class);
    Route::resource('arsip', ArsipController::class);
    Route::resource('berita-terbaru', BeritaTerbaruItemController::class)->parameters(['berita-terbaru' => 'berita_terbaru'])->except(['show']);
    Route::resource('konten', KontenController::class)->only(['index', 'edit', 'update']);
    Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda.index');
    Route::post('/beranda', [BerandaController::class, 'update'])->name('beranda.update');
    Route::get('/jejak-pergerakan', [JejakPergerakanController::class, 'index'])->name('jejak.index');
    Route::post('/jejak-pergerakan', [JejakPergerakanController::class, 'update'])->name('jejak.update');
    Route::resource('jejak-galeri', JejakPergerakanItemController::class)->parameters(['jejak-galeri' => 'item'])->except(['show']);
});
