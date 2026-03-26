<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/client/conferences', [ClientController::class, 'index'])->name('client.conferences.index');
    Route::get('/client/conferences/{id}', [ClientController::class, 'show'])->name('client.conferences.show');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/client/conferences', [ClientController::class, 'index'])->name('client.conferences.index');
    Route::get('/client/conferences/{id}', [ClientController::class, 'show'])->name('client.conferences.show');
});

Route::middleware(['auth'])->prefix('employee')->group(function () {
    Route::get('conferences', [EmployeeController::class, 'index'])->name('employee.conferences.index');
    Route::get('conferences/{id}', [EmployeeController::class, 'show'])->name('employee.conferences.show');
});

Route::prefix('admin')->group(function () {
    Route::resource('conferences', App\Http\Controllers\Admin\ConferenceController::class);
});

Route::get('/admin', function () {
    return redirect()->route('conferences.index');
})->middleware(['auth']);

require __DIR__.'/auth.php';