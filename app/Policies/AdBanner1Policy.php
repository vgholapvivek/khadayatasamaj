<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\AdBanner1;
use App\Models\User;

class AdBanner1Policy
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
        return $user->hasPermissionTo('adBanner1-viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AdBanner1  $adBanner1
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, AdBanner1 $adBanner1)
    {
        //
        return $user->hasPermissionTo('adBanner1-view');

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
        return $user->hasPermissionTo('adBanner1-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AdBanner1  $adBanner1
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, AdBanner1 $adBanner1)
    {
        //
        return $user->hasPermissionTo('adBanner1-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AdBanner1  $adBanner1
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, AdBanner1 $adBanner1)
    {
        //
        return $user->hasPermissionTo('adBanner1-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AdBanner1  $adBanner1
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, AdBanner1 $adBanner1)
    {
        //
        return $user->hasPermissionTo('adBanner1-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AdBanner1  $adBanner1
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, AdBanner1 $adBanner1)
    {
        //
        return $user->hasPermissionTo('adBanner1-forceDelete');

    }
}
