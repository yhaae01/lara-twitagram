<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;

Route::view('/', 'welcome');
Route::get('timeline', TimelineController::class)->name('timeline');

Route::view('/dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
