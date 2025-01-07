<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function view(User $authUser, User $user)
    {
        return  $user->id === $authUser->id || $authUser->hasRole('admin') || $authUser->hasRole('superAdmin');
    }
    
    public function viewAny(User $authUser)
    {
        return $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }

    public function create(User $authUser, User $user)
    {
        return $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }

    public function edit(User $authUser, User $user)
    {
        return  $user->id === $authUser->id || $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }
    
    public function update(User $authUser, User $user)
    {
        return  $user->id === $authUser->id || $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }

    public function delete(User $authUser, User $user)
    {
        return  $user->id === $authUser->id || $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }
}
