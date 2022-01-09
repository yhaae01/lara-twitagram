<?php

use App\Http\Controllers\FollowingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\ProfileInformationController;

Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
   Route::get('timeline', TimelineController::class)->name('timeline');
   Route::post('status', [StatusController::class, 'store'])->name('statuses.store');

   Route::get('profile/{user}/{following}', FollowingController::class)->name('profile.following');

   Route::get('profile/{user:username}', ProfileInformationController::class)->name('profile')->withoutMiddleware('auth');
});



require __DIR__.'/auth.php';
