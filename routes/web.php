<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
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
// Route::get('/', function(){
//     return view('home');
// });

// Autentikasi
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1'); // 5 attempt per minute
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::middleware('guest')->group(function () {
    Route::resource('products', ProductController::class);
    Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
    // untuk mengetahui terkait throttle dapat dilihat di auth.php
    Route::post('/admin/login', [AuthController::class, 'login'])->middleware('throttle:5,1')->name('admin.login.submit'); // Membatasi 5 percobaan dalam 1 menit
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');});


// Halaman management (hanya bisa diakses jika login)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'management'])->name('dashboard');
    // Tambahkan route CRUD lainnya di sini (product, blog, dll)
});

