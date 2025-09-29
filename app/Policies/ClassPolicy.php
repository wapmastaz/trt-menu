<?php

namespace App\Policies;

use App\Models\Class;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClassPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, class $class): bool
    {
    }

public
function create(User $user): bool
{
}

public
function update(User $user, class $class): bool
    {
    }

    public function delete(User $user, class $class): bool
    {
    }

    public function restore(User $user, class $class): bool
    {
    }

    public function forceDelete(User $user, class $class): bool
    {
    }
}
