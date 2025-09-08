<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// Dashboard using FrontController
Route::get('/', [FrontController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// FrontController pages
Route::middleware('auth')->group(function () {
    Route::get('/trip-explorer', [FrontController::class, 'tripexplorer'])->name('trip-explorer');
    Route::get('/trip-planner', [FrontController::class, 'tripplanner'])->name('trip-planner');
    Route::get('/gearlist', [FrontController::class, 'gearlist'])->name('gearlist');
    Route::get('/climb-gallery', [FrontController::class, 'climbgallery'])->name('climb-gallery');
    Route::get('/profile', [FrontController::class, 'profile'])->name('profile');
});

// ProfileController routes 
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
