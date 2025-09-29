<?php

namespace App\Http\Controllers\SuperAdmin\Academics;

use App\Http\Controllers\Controller;
use App\Models\AcademicClass;
use Inertia\Inertia;

class AcademicClassController extends Controller
{
  public function index()

  {
    $classes = AcademicClass::get();
    return Inertia::render("super-admin/academics/classes/index", [
      "classes" => $classes
    ]);
  }
}
