<?php

use App\Models\Chirp;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/chirps',[ChirpController::class,'index'])->name('chirps.index');
Route::post('/chirps',[ChirpController::class,'store'])->name('chirps.store');
Route::get('/chirps/{id}/edit',[ChirpController::class,'edit'])->name('chirps.edit');
Route::put('/chirps/{id}', [ChirpController::class, 'update'])->name('chirps.update');

Route::delete('/chirps/{id}', [ChirpController::class, 'destroy'])->name('chirps.destroy');