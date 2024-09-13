<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sallerController;

Route::prefix('login')->group(function () {
    Route::get('/', [sallerController::class, 'index'])->name('login');
    Route::post('/', [sallerController::class, 'login'])->name('logiar');
});


Route::view('/', 'welcome');
