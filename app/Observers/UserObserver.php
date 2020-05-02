<?php

namespace App\Observers;

use App\User;

class UserObserver
{
    /**
     * Handle the user "retrieved" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function retrieved(User $user)
    {
        dump('user retrieved!');
    }

    /**
     * Handle the user "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        dump('user created!');
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        dump('user updated!');
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        dump('user deleted!');
    }
}
