<?php

namespace App\Policies;

use App\User;
use App\Dummy;
use Illuminate\Auth\Access\HandlesAuthorization;

class DummyPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any dummies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the dummy.
     *
     * @param  \App\User  $user
     * @param  \App\Dummy  $dummy
     * @return mixed
     */
    public function view(User $user, Dummy $dummy)
    {
        //
    }

    /**
     * Determine whether the user can create dummies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the dummy.
     *
     * @param  \App\User  $user
     * @param  \App\Dummy  $dummy
     * @return mixed
     */
    public function update(User $user, Dummy $dummy)
    {
        //
    }

    /**
     * Determine whether the user can delete the dummy.
     *
     * @param  \App\User  $user
     * @param  \App\Dummy  $dummy
     * @return mixed
     */
    public function delete(User $user, Dummy $dummy)
    {
        //
    }

    /**
     * Determine whether the user can restore the dummy.
     *
     * @param  \App\User  $user
     * @param  \App\Dummy  $dummy
     * @return mixed
     */
    public function restore(User $user, Dummy $dummy)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the dummy.
     *
     * @param  \App\User  $user
     * @param  \App\Dummy  $dummy
     * @return mixed
     */
    public function forceDelete(User $user, Dummy $dummy)
    {
        //
    }
}
