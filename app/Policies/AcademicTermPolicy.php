<?php

namespace App\Policies;

use App\Models\AcademicTerm;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AcademicTermPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, AcademicTerm $academicTerm): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, AcademicTerm $academicTerm): bool
    {
    }

    public function delete(User $user, AcademicTerm $academicTerm): bool
    {
    }

    public function restore(User $user, AcademicTerm $academicTerm): bool
    {
    }

    public function forceDelete(User $user, AcademicTerm $academicTerm): bool
    {
    }
}
