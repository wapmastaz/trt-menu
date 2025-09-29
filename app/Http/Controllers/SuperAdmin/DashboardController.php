<?php

namespace App\Http\Controllers\SuperAdmin;
use Inertia\Inertia;

class DashboardController
{

  public function index()
  {
    return Inertia::render('super-admin/dashboard/index');
  }

}
