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
        return $user->can('Access AppliedJob');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('Write AppliedJob');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, AppliedJob $appliedjob): bool
    {
        return $user->can('Edit AppliedJob');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, AppliedJob $appliedjob): bool
    {
        return $user->can('Delete AppliedJob');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, AppliedJob $appliedjob): bool
    {
        return $user->can('restore AppliedJob');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, AppliedJob $appliedjob): bool
    {
        return $user->can('force-delete AppliedJob');
    }
}
