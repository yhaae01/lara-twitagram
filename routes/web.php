<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;

Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
   Route::get('timeline', TimelineController::class)->name('timeline');
   Route::post('status', [StatusController::class, 'store'])->name('statuses.store');
});


require __DIR__.'/auth.php';
