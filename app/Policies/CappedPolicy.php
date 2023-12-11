<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Capped;
use App\Models\User;

class CappedPolicy
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
        return $user->hasPermissionTo('cap-viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Capped  $capped
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Capped $capped)
    {
        //
        return $user->hasPermissionTo('cap-view');

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
        return $user->hasPermissionTo('cap-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Capped  $capped
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Capped $capped)
    {
        //
        return $user->hasPermissionTo('cap-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Capped  $capped
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Capped $capped)
    {
        //
        return $user->hasPermissionTo('cap-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Capped  $capped
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Capped $capped)
    {
        //
        return $user->hasPermissionTo('cap-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Capped  $capped
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Capped $capped)
    {
        //
        return $user->hasPermissionTo('cap-forceDelete');

    }
}
