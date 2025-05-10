<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Halaman publik
Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/travel', [DashboardController::class, 'travel'])->name('travel');
Route::get('/testimoni', [DashboardController::class, 'testimoni'])->name('testimoni');

// Autentikasi
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1'); // 5 attempt per minute
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Halaman management (hanya bisa diakses jika login)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'management'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('cars', CarController::class);
    Route::resource('testimonis', TestimoniController::class);

});

