<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Companies;
use App\Models\User;

class CompaniesPolicy
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
        return $user->hasPermissionTo('company-viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Companies $companies)
    {
        //
        return $user->hasPermissionTo('company-view');

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
        return $user->hasPermissionTo('company-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Companies $companies)
    {
        //
        return $user->hasPermissionTo('company-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Companies $companies)
    {
        //
        return $user->hasPermissionTo('company-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Companies $companies)
    {
        //
        return $user->hasPermissionTo('company-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Companies $companies)
    {
        //
        return $user->hasPermissionTo('company-forceDelete');

    }
}
