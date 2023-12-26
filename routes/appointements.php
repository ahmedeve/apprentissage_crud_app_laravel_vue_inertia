<?php

use App\Http\Controllers\AppointementController;
use Illuminate\Support\Facades\Route;

Route::post('/appointements/debugstore', [AppointementController::class, 'debugstore'])->name('appointements.debugstore');

Route::middleware('auth')->group(function () {

    Route::get('/appointements', [AppointementController::class, 'index'])->name('appointements.index');
    Route::get('/appointements/create', [AppointementController::class, 'create'])->name('appointements.create');
    Route::get('/appointements/{appointement_id}', [AppointementController::class, 'show'])->name('appointements.show');

});
