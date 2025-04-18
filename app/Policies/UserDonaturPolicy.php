<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserDonatur;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class UserDonaturPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, UserDonatur $userDonatur): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // if ( Auth::check() && Auth::user()->role == 'admin' ) {
        //     return true;
        // }
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, UserDonatur $userDonatur): bool
    {
        if ( Auth::check() && Auth::user()->role == 'admin' ) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, UserDonatur $userDonatur): bool
    {
        if ( Auth::check() && Auth::user()->role == 'admin' ) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, UserDonatur $userDonatur): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, UserDonatur $userDonatur): bool
    {
        return false;
    }
}
