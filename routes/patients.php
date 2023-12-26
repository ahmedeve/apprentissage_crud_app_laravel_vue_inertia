<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group( function(){
    Route::post('/register/patient', [PatientController::class, 'store'])->name('patients.store');
});
Route::middleware('auth')->group(function () {

    Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
    Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
    Route::get('/patients/{patient_id}', [PatientController::class, 'show'])->name('patients.show');
});
