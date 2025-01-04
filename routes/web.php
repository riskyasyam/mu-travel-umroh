<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('pages.index');
// });

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
});