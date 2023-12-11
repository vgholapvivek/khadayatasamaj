<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Valuation;
use App\Models\User;

class ValuationPolicy
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
        return $user->hasPermissionTo('valuation-viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\valuation  $valuation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Valuation $valuation)
    {
        //
        return $user->hasPermissionTo('valuation-view');

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
        return $user->hasPermissionTo('valuation-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\valuation  $valuation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Valuation $valuation)
    {
        //
        return $user->hasPermissionTo('valuation-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\valuation  $valuation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Valuation $valuation)
    {
        //
        return $user->hasPermissionTo('valuation-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\valuation  $valuation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Valuation $valuation)
    {
        //
        return $user->hasPermissionTo('valuation-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\valuation  $valuation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Valuation $valuation)
    {
        //
        return $user->hasPermissionTo('valuation-forceDelete');

    }
}
