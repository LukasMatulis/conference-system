<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ConferenceController;

Route::get('/', function () {
    return view('home');
});

// Client routes
Route::prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('client.index');
    Route::get('/conferences', [ClientController::class, 'index']);
});

// Employee routes
Route::prefix('employee')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/conferences', [EmployeeController::class, 'index']);
});

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::resource('conferences', ConferenceController::class);
});