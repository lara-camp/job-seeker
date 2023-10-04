<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RolePolicy
{
    public function viewAny(User $user): bool
    {
        // return $user->hasDirectPermission('Access Role');
        return $user->hasAnyPermission(['Access Role', 'Write Role', 'Edit Role', 'Delete Role']);
    }
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Role $role): bool
    {
        return $user->can('Access Role');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('Write Role');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Role $role): bool
    {
        return $user->can('Edit Role');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Role $role): bool
    {
        return $user->can('Delete Role');
    }
}
