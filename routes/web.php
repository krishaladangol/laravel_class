<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/chirps', [ChirpController::class, 'index'])->name('chirps.index');
    Route::post('/chirps', [ChirpController::class, 'store'])->name('chirps.store');

    Route::get('/chirps/{id}/edit', [ChirpController::class, 'edit'])->name('chirps.edit');
    Route::put('/chirps/{id}', [ChirpController::class, 'update'])->name('chirps.update');

    // Route::delete('/chirps/{id}', [ChirpController::class, 'destroy'])->name('chirps.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/chirps', [ChirpController::class, 'adminIndex'])->name('chirps.adminIndex');
    Route::post('/admin/chirps', [ChirpController::class, 'adminStore'])->name('chirps.adminStore');

    Route::get('/admin/chirps/{id}/edit', [ChirpController::class, 'adminEdit'])->name('chirps.adminEdit');
    Route::put('/admin/chirps/{id}', [ChirpController::class, 'adminUpdate'])->name('chirps.adminUpdate');

    Route::delete('/admin/chirps/{id}', [ChirpController::class, 'adminDestroy'])->name('chirps.adminDestroy');
});


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');