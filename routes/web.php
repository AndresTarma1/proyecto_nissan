<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

Route::prefix('login')->controller(SellerController::class)->group(function () {
    Route::get('/', 'index')->middleware('seller')->name('seller.index');
    Route::get('/logout', 'logout')->name('seller.logout');
    Route::post('/', 'login')->name('seller.login');
});


Route::view('/', 'welcome')->name('welcome')->middleware('auth:vendedor');
