<?php

namespace App\Policies;

use App\Models\Setting;
use App\Models\User;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Gate;

class SettingPolicy
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


        return $user->hasPermissionTo('setting-viewAny');
    }

    public function test(User $user)
    {
     
        
        dd(11111);
    }
    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Setting $setting)
    {
        //


        return $user->hasPermissionTo('setting-view');
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

        return $user->hasPermissionTo('setting-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Setting $setting)
    {
        //
        return $user->hasPermissionTo('setting-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Setting $setting)
    {
        //

        return $user->hasPermissionTo('setting-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Setting $setting)
    {
        //
        return $user->hasPermissionTo('setting-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Setting $setting)
    {
        //
        return $user->hasPermissionTo('setting-forceDelete');

    }
}
