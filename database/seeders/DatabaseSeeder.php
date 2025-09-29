<?php

namespace Database\Seeders;

use App\Models\AcademicClass;
use App\Models\AcademicSession;
use App\Models\AcademicTerm;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $users = User::factory(2)->create();

    $users->each(function ($user) {
      $user->assignRole('super-admin');
    });
  }
}
