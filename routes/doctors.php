<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group( function(){
    Route::post('/register/doctor', [DoctorController::class, 'store'])->name('doctors.store');
});

Route::middleware('auth')->group(function () {

    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
    Route::get('/doctors/{doctor_id}', [DoctorController::class, 'show'])->name('doctors.show');
});
