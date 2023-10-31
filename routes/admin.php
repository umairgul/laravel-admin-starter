<?php

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin', [LoginController::class, 'adminLogin'])->name('admin.login');

// Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');
// Route::post('/admin/register', [RegisterController::class, 'createAdmin'])->name('admin.register');

Route::middleware(['auth:admin'])->prefix('admin/')->as('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/password', [ProfileController::class, 'password'])->name('password');
    Route::put('/password/update', [ProfileController::class, 'updatePassword'])->name('password.update');
});
