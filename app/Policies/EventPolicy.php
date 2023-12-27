<?php

namespace App\Policies;

use App\Models\Event;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy
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
        return $user->hasPermissionTo('event-viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
<<<<<<< HEAD
     * @param  \App\Models\Event  $event
=======
     * @param  \App\Models\City  $city
>>>>>>> 02b0edeb1468256386439600e3519840685afe73
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Event $event)
    {
        //
        return $user->hasPermissionTo('event-view');

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
        return $user->hasPermissionTo('event-create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
<<<<<<< HEAD
     * @param  \App\Models\Event  $event
=======
     * @param  \App\Models\City  $city
>>>>>>> 02b0edeb1468256386439600e3519840685afe73
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Event $event)
    {
        //
        return $user->hasPermissionTo('event-update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
<<<<<<< HEAD
     * @param  \App\Models\Event  $event
=======
     * @param  \App\Models\City  $city
>>>>>>> 02b0edeb1468256386439600e3519840685afe73
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Event $event)
    {
        //
        return $user->hasPermissionTo('event-delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
<<<<<<< HEAD
     * @param  \App\Models\Event  $event
=======
     * @param  \App\Models\City  $city
>>>>>>> 02b0edeb1468256386439600e3519840685afe73
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Event $event)
    {
        //
        return $user->hasPermissionTo('event-restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
<<<<<<< HEAD
     * @param  \App\Models\Event  $event
=======
     * @param  \App\Models\City  $city
>>>>>>> 02b0edeb1468256386439600e3519840685afe73
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Event $event)
    {
        //
        return $user->hasPermissionTo('event-forceDelete');

    }
}
