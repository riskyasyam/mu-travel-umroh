<?php

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

Route::get('/dashboard', function(){
    return 'Welcome to the dashboard';
})->middleware('auth');