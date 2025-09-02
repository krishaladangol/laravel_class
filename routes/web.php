<?php

use App\Models\Chirp;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/chirps',[ChirpController::class,'index'])->name('chirps.index');
Route::post('/chirps',[ChirpController::class,'store'])->name('chirps.store');