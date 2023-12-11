<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Breakpoint;
use App\Models\User;

class BreakpointPolicy
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
        return $user->hasPermissionTo('breakpoint-viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Breakpoint  $breakpoint
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Breakpoint $breakpoint)
    {
        //
        return $user->hasPermissionTo('breakpoint-view');

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
        return $user->hasPermissionTo('breakpoint-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Breakpoint  $breakpoint
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Breakpoint $breakpoint)
    {
        //
        return $user->hasPermissionTo('breakpoint-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Breakpoint  $breakpoint
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Breakpoint $breakpoint)
    {
        //
        return $user->hasPermissionTo('breakpoint-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Breakpoint  $breakpoint
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Breakpoint $breakpoint)
    {
        //
        return $user->hasPermissionTo('breakpoint-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Breakpoint  $breakpoint
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Breakpoint $breakpoint)
    {
        //
        return $user->hasPermissionTo('breakpoint-forceDelete');

    }
}
