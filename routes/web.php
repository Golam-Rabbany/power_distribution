<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\MeterController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ReadingController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::resource('/area', AreaController::class);
    Route::resource('/owner', OwnerController::class);
    Route::resource('/meter', MeterController::class);
    Route::resource('/reading', ReadingController::class);
    
    
    Route::get('/getAreaMeterSection/{id}', [ReadingController::class, 'getAreaMeterSection'])->name('getAreaMeterSection');
    Route::get('/getAreaOwnerSection/{id}', [MeterController::class, 'getAreaOwnerSection'])->name('getAreaOwnerSection');
    
});

require __DIR__.'/auth.php';
