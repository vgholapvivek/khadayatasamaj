<?php

namespace App\Policies;

use App\Models\Matrimonial;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MatrimonialPolicy
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
        return $user->hasPermissionTo('matrimonial-viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Matrimonial  $matrimonial
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Matrimonial $matrimonial)
    {
        //
        return $user->hasPermissionTo('matrimonial-view');

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
        return $user->hasPermissionTo('matrimonial-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Matrimonial  $matrimonial
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Matrimonial $matrimonial)
    {
        //
        return $user->hasPermissionTo('matrimonial-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Matrimonial  $matrimonial
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Matrimonial $matrimonial)
    {
        //
        return $user->hasPermissionTo('matrimonial-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Matrimonial  $matrimonial
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Matrimonial $matrimonial)
    {
        //
        return $user->hasPermissionTo('matrimonial-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Matrimonial  $matrimonial
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Matrimonial $matrimonial)
    {
        //
        return $user->hasPermissionTo('matrimonial-forceDelete');

    }
}
