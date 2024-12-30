<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function() {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/data-mahasiswa', MahasiswaController::class);

});


require __DIR__.'/auth.php';
