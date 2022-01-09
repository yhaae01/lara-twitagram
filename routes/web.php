<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExploreUserController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\WelcomeController;

Route::get('/', WelcomeController::class);

Route::middleware('auth')->group(function () {
   Route::get('timeline', TimelineController::class)->name('timeline');
   Route::post('status', [StatusController::class, 'store'])->name('statuses.store');

   Route::get('explore', ExploreUserController::class)->name('users.index');

   Route::prefix('profile')->group(function() {
      Route::get('{user}/{following}', [FollowingController::class, 'index'])->name('following.index');
      Route::post('{user}', [FollowingController::class, 'store'])->name('following.store');
      Route::get('{user:username}', ProfileInformationController::class)->name('profile')->withoutMiddleware('auth');
   });
});



require __DIR__.'/auth.php';
