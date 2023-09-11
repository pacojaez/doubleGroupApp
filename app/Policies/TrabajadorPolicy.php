<?php

namespace App\Policies;

use App\Models\Trabajador;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TrabajadorPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->id != null;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Trabajador $trabajador): bool
    {
        return $user->id != null;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->id != null;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Trabajador $trabajador): bool
    {
        return $user->id != null;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Trabajador $trabajador): bool
    {
        return $user->id != null;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Trabajador $trabajador): bool
    {
        return $user->id != null;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Trabajador $trabajador): bool
    {
        return $user->id != null;
    }
}