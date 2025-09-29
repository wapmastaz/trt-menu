<?php

use App\Http\Controllers\SuperAdmin\Academics\AcademicClassController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Http\Controllers\SuperAdmin\inventory\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('super-admin')->middleware(['auth', 'verified', 'role:super-admin'])->group(function () {
  /* Dashboard Route */
  Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('super-admin.dashboard');
  });

  /* Inventory Routes*/
  Route::prefix('inventory')->group(function(){
    /* Categories Routes*/
    Route::resource('categories',CategoryController::class);
  });
});
