<?php

namespace App\Policies;

use App\Models\Artikel;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class ArtikelPolicy
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
    public function view(User $user, Artikel $artikel): bool
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
    public function update(User $user, Artikel $artikel): bool
    {
        if ( Auth::check() && Auth::user()->role === 'admin' || Auth::user()->role === 'humas') {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Artikel $artikel): bool
    {
        if ( Auth::check() && Auth::user()->role === 'admin' || Auth::user()->role === 'humas') {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Artikel $artikel): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Artikel $artikel): bool
    {
        return false;
    }
}
