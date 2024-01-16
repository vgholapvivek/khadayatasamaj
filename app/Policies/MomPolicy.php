<?php

namespace App\Policies;

use App\Models\Mom;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MomPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
        return $user->hasPermissionTo('mom-viewAny');
    }

   
    public function view(User $user, Mom $mom)
    {
        //
        return $user->hasPermissionTo('mom-view');

    }


    public function create(User $user)
    {
        //
        return $user->hasPermissionTo('mom-create');

    }

    public function update(User $user, Mom $mom)
    {
        //
        return $user->hasPermissionTo('mom-update');

    }


    public function delete(User $user, Mom $mom)
    {
        //
        return $user->hasPermissionTo('mom-delete');

    }


    public function restore(User $user, Mom $mom)
    {
        //
        return $user->hasPermissionTo('mom-restore');

    }


    public function forceDelete(User $user, Mom $mom)
    {
        //
        return $user->hasPermissionTo('mom-forceDelete');

    }
}
