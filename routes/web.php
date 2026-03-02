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
    Route::get('/conferences', [ClientController::class, 'index']);
    Route::get('/conferences/{id}', [ClientController::class, 'show']);

    Route::get('/register', function () {
        return view('client.register');
    })->name('client.register');

    Route::post('/register', function (\Illuminate\Http\Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        return back()->with('success', 'Registration received (demo)');
    });
});

// Employee routes
Route::prefix('employee')->group(function () {
    Route::get('/conferences', [App\Http\Controllers\EmployeeController::class, 'index']);
    Route::get('/conferences/{id}', [App\Http\Controllers\EmployeeController::class, 'show']);
});

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
    Route::resource('conferences', App\Http\Controllers\Admin\ConferenceController::class);
});