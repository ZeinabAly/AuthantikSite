<?php

namespace App\Policies;

use App\Models\{User, Permission};

class PermissionPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function view(User $authUser, Permission $permission)
    {
        return  $authUser->hasRole('superAdmin');
    }
    
    public function viewAny(User $authUser)
    {
        return  $authUser->hasRole('superAdmin');
    }

    public function create(User $authUser, Permission $permission)
    {
        return  $authUser->hasRole('superAdmin');
    }

    public function edit(User $authUser, Permission $permission)
    {
        return  $authUser->hasRole('superAdmin');
    }
    
    public function update(User $authUser, Permission $permission)
    {
        return  $authUser->hasRole('superAdmin');
    }

    public function delete(User $authUser, Permission $permission)
    {
        return  $authUser->hasRole('superAdmin');
    }
}

