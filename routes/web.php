<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TestimoniController;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Route;



Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/', [PackageController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login',[LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/paket', [PackageController::class, 'tampil'])->name('admin.paket');
    Route::get('/dokumentasi', [DokumentasiController::class, 'index'])->name('admin.dokumentasi');
    Route::get('/testimoni', [TestimoniController::class,'index'])->name('admin.testimoni');
    Route::get('/paket/{id}/edit', [PackageController::class, 'edit'])->name('admin.paket.edit');
    Route::get('/paket/create', [PackageController::class, 'create'])->name('admin.paket.create');
    Route::delete('/admin/paket/{id}/destroy', [PackageController::class, 'destroy'])->name('admin.paket.destroy');
    Route::post('/paket/create/store', [PackageController::class, 'store'])->name('admin.paket.create.store');
    Route::put('/paket/{id}/edit/update', [PackageController::class, 'update'])->name('admin.paket.edit.update');
    Route::get('/dokumentasi/create', [DokumentasiController::class, 'create'])->name('admin.dokumentasi.create');
    Route::post('/dokumentasi/create/store', [DokumentasiController::class, 'store'])->name('admin.dokumentasi.create.store');
    Route::get('/dokumentasi/{id}/edit', [DokumentasiController::class, 'edit'])->name('admin.dokumentasi.edit');
    Route::put('/dokumentasi/{id}/edit/update', [DokumentasiController::class, 'update'])->name('admin.dokumentasi.edit.update');
    Route::delete('/admin/dokumentasi/{id}/destroy', [DokumentasiController::class, 'destroy'])->name('admin.dokumentasi.destroy');
    Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('admin.testimoni.create');
    Route::post('/testimoni/create/store', [TestimoniController::class, 'store'])->name('admin.testimoni.create.store');
    Route::get('/testimoni/{id}/edit', [TestimoniController::class, 'edit'])->name('admin.testimoni.edit');
    Route::put('/testimoni/{id}/edit/update', [TestimoniController::class, 'update'])->name('admin.testimoni.edit.update');
    Route::delete('/admin/testimoni/{id}/destroy', [TestimoniController::class, 'destroy'])->name('admin.testimoni.destroy');
});