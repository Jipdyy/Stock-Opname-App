<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

Route::redirect('/', '/login');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});

Route::get('/admin/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'role:admin'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');