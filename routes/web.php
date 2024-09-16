<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VehicleController;

Route::prefix('login')->controller(SellerController::class)->group(function () {
    Route::get('/', 'index')->middleware('seller')->name('seller.index');
    Route::get('/logout', 'logout')->name('seller.logout');
    Route::post('/', 'login')->name('seller.login');
});


Route::view('/', 'welcome')->name('welcome')->middleware('auth:vendedor');

Route::view('/aguacate', 'customer.register')->name('aguacate');
Route::post('/customer/create', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicle.index');
