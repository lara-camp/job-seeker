<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\AppliedJob;
use App\Models\User;

class AppliedJobPolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, AppliedJob $appliedjob): bool
    {
        return $user->hasDirectPermission('Access AppliedJob');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasDirectPermission('Write AppliedJob');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, AppliedJob $appliedjob): bool
    {
        return $user->hasDirectPermission('Edit AppliedJob');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, AppliedJob $appliedjob): bool
    {
        return $user->hasDirectPermission('Delete AppliedJob');
    }
}
