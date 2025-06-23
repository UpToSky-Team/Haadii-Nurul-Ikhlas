<?php

namespace App\Policies;

use App\Models\DokumenRegis;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DokumenRegisPolicy
{
    /**
     * Create a new policy instance.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, DokumenRegis $userRegistration): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ( Auth::check() && Auth::user()->role == 'admin' || Auth::user()->role == 'regis' ) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, DokumenRegis $userRegistration): bool
    {
        if ( Auth::check() && Auth::user()->role == 'admin' || Auth::user()->role == 'regis' ) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, DokumenRegis $userRegistration): bool
    {
        if ( Auth::check() && Auth::user()->role == 'admin' || Auth::user()->role == 'regis' ) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, DokumenRegis $userRegistration): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, DokumenRegis $userRegistration): bool
    {
        return false;
    }
}
