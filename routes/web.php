<?php

use App\Http\Controllers\ReservaController;
use App\Livewire\ReservaIndex;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::resource('reservas', ReservaController::class);

Route::get('reservas', ReservaIndex::class)->middleware('auth');
