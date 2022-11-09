<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\MeterController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ReadingController;


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
    Route::resource('/bill', BillController::class);
 
    Route::get('/generate_bill', [BillController::class, 'generate_bill'])->name('generate.bill');
    Route::get('/paybill', [BillController::class, 'paybill'])->name('paybill');
    Route::get('/invoice/{id}', [BillController::class, 'invoice'])->name('invoice');
    
    Route::get('/getAreaMeterSection/{id}', [ReadingController::class, 'getAreaMeterSection'])->name('getAreaMeterSection');
    Route::get('/getAreaOwnerSection/{id}', [MeterController::class, 'getAreaOwnerSection'])->name('getAreaOwnerSection');
    
});


Route::get('/role_permission', [MeterController::class, 'role_permission']);

require __DIR__.'/auth.php';
