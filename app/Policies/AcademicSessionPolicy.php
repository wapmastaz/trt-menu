<?php

namespace App\Policies;

use App\Models\AcademicSession;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AcademicSessionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, AcademicSession $academicSession): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, AcademicSession $academicSession): bool
    {
    }

    public function delete(User $user, AcademicSession $academicSession): bool
    {
    }

    public function restore(User $user, AcademicSession $academicSession): bool
    {
    }

    public function forceDelete(User $user, AcademicSession $academicSession): bool
    {
    }
}
