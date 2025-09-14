<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClimbController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


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

// Climb Gallery routes
Route::middleware(['auth'])->group(function () {
    Route::get('/climb-gallery', [ClimbController::class, 'climb'])->name('climbs.gallery');
    Route::post('/climb-gallery', [ClimbController::class, 'store'])->name('climbs.store');
    Route::put('/climbs/{climb}', [ClimbController::class, 'update'])->name('climbs.update');
    Route::delete('/climbs/{climb}', [ClimbController::class, 'destroy'])->name('climbs.destroy');
});


//dashboard p climb
Route::get('/', [FrontController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


require __DIR__.'/auth.php';
