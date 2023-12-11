<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\First;
use App\Models\User;

class FirstPolicy
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
        return $user->hasPermissionTo('first-viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\First  $first
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, First $first)
    {
        //
        return $user->hasPermissionTo('first-view');

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
        return $user->hasPermissionTo('first-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\First  $first
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, First $first)
    {
        //
        return $user->hasPermissionTo('first-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\First  $first
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, First $first)
    {
        //
        return $user->hasPermissionTo('first-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\First  $first
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, First $first)
    {
        //
        return $user->hasPermissionTo('first-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\First  $first
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, First $first)
    {
        //
        return $user->hasPermissionTo('first-forceDelete');

    }
}
