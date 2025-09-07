<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'index'])->name('home');   
Route::get('/trip-explorer', [FrontController::class, 'tripexplorer'])->name('trip-explorer');             
Route::get('/trip-planner', [FrontController::class, 'tripplanner'])->name('trip-planner');
Route::get('/gearlist', [FrontController::class, 'gearlist'])->name('gearlist');
Route::get('/climb-gallery', [FrontController::class, 'climbgallery'])->name('climb-gallery');
Route::get('/profile', [FrontController::class, 'profile'])->name('profile');