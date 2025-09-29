<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/assign-user', function () {
//  $users = User::all();
//  $users->each(function ($user) {
//    $user->assignRole('super-admin');
//  });
//  return 'done';
//});

Route::get('/', function () {
  return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
  Route::get('dashboard', function () {
    return Inertia::render('dashboard');
  })->name('dashboard');
});

require __DIR__ . '/super-admin.php';
require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
