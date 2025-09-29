<?php

namespace App\Policies;

use App\Models\Categories;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriesPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Categories $categories): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Categories $categories): bool
    {
    }

    public function delete(User $user, Categories $categories): bool
    {
    }

    public function restore(User $user, Categories $categories): bool
    {
    }

    public function forceDelete(User $user, Categories $categories): bool
    {
    }
}
