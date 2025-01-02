<?php

use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/', [PackageController::class, 'index'])->name('home');
