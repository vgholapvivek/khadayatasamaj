<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Options;
use App\Models\User;

class OptionsPolicy
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
        return $user->hasPermissionTo('option-viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Options  $options
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Options $options)
    {
        //
        return $user->hasPermissionTo('option-view');

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
        return $user->hasPermissionTo('option-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Options  $options
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Options $options)
    {
        //
        return $user->hasPermissionTo('option-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Options  $options
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Options $options)
    {
        //
        return $user->hasPermissionTo('option-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Options  $options
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Options $options)
    {
        //
        return $user->hasPermissionTo('option-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Options  $options
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Options $options)
    {
        //
        return $user->hasPermissionTo('option-forceDelete');

    }
}
