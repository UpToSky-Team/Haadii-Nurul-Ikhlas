<?php

namespace App\Policies;

use App\Models\MaksudTujuan;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class MaksudTujuanPolicy
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
    public function view(User $user, MaksudTujuan $maksudTujuan): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ( Auth::check() && Auth::user()->role === 'admin' || Auth::user()->role === 'humas') {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, MaksudTujuan $maksudTujuan): bool
    {
        if ( Auth::check() && Auth::user()->role === 'admin' || Auth::user()->role === 'humas') {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, MaksudTujuan $maksudTujuan): bool
    {
        if ( Auth::check() && Auth::user()->role === 'admin' || Auth::user()->role === 'humas') {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, MaksudTujuan $maksudTujuan): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, MaksudTujuan $maksudTujuan): bool
    {
        return false;
    }
}
