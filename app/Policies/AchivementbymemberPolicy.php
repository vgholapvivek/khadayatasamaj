<?php

namespace App\Policies;

use App\Models\Achivementbymember;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AchivementbymemberPolicy
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
        return $user->hasPermissionTo('achivementbymember-viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Achivementbymember  $achivementbymember
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Achivementbymember $achivementbymember)
    {
        //
        return $user->hasPermissionTo('achivementbymember-view');

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
        return $user->hasPermissionTo('achivementbymember-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Achivementbymember  $achivementbymember
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Achivementbymember $achivementbymember)
    {
        //
        return $user->hasPermissionTo('achivementbymember-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Achivementbymember  $achivementbymember
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Achivementbymember $achivementbymember)
    {
        //
        return $user->hasPermissionTo('achivementbymember-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Achivementbymember  $achivementbymember
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Achivementbymember $achivementbymember)
    {
        //
        return $user->hasPermissionTo('achivementbymember-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Achivementbymember  $achivementbymember
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Achivementbymember $achivementbymember)
    {
        //
        return $user->hasPermissionTo('achivementbymember-forceDelete');

    }
}
