<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WorkspaceController;
use App\Shared\AppConstant;
use Illuminate\Support\Facades\Route;

// public routes
Route::prefix('login')->group(function () {
    Route::get('', [AuthController::class, 'login'])->name('login');
    Route::post('', [AuthController::class, 'submitLogin'])->name('submitLogin');
});

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// private routes
Route::middleware([AppConstant::APP_AUTH_MIDDLEWARE])->group(function () {
    Route::prefix('')->group(function () {
        Route::get('/', [WorkspaceController::class, 'index'])->name('index');
    });

    Route::prefix('users')->group(function () {
        
    });

    Route::prefix('roles')->group(function () {
        
    });
});