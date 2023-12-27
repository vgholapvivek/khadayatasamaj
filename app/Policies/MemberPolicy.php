<?php

namespace App\Policies;

use App\Models\Member;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MemberPolicy
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
        return $user->hasPermissionTo('member-viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Member $member)
    {
        //
        return $user->hasPermissionTo('member-view');

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
        return $user->hasPermissionTo('member-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Member $member)
    {
        //
        return $user->hasPermissionTo('member-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Member $member)
    {
        //
        return $user->hasPermissionTo('member-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Member $member)
    {
        //
        return $user->hasPermissionTo('member-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Member $member)
    {
        //
        return $user->hasPermissionTo('member-forceDelete');

    }
}
