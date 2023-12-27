<?php

namespace App\Policies;

use App\Models\Requirement;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RequirementPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
        return $user->hasPermissionTo('requirement-viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Requirement $requirement)
    {
        //
        return $user->hasPermissionTo('requirement-view');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
        return $user->hasPermissionTo('requirement-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Requirement $requirement)
    {
        //
        return $user->hasPermissionTo('requirement-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Requirement $requirement)
    {
        //
        return $user->hasPermissionTo('requirement-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Requirement $requirement)
    {
        //
        return $user->hasPermissionTo('requirement-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Requirement $requirement)
    {
        //
        return $user->hasPermissionTo('requirement-forceDelete');

    }
}
