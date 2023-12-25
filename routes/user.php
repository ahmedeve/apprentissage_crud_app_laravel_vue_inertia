<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function (){

    Route::get('/register/{user_type}', [UserController::class, 'create'])->name('register');

});

