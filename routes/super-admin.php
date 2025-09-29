<?php

use App\Http\Controllers\SuperAdmin\Academics\AcademicClassController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('super-admin')->middleware(['auth', 'verified', 'role:super-admin'])->group(function () {
  /* Dashboard Route */
  Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('super-admin.dashboard');
  });

  /* Academics Routes*/
  Route::prefix('academics')->group(function(){
    /* Classes Routes*/
    Route::resource('classes',AcademicClassController::class);
  });
});
