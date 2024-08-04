<?php

use App\Http\Controllers\VorratController;
use Illuminate\Support\Facades\Route;

Route::get('/vorraete', [VorratController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('vorraete');

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
