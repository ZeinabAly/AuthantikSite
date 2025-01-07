<?php

namespace App\Policies;

use App\Models\{User, Role};

class RolePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function view(User $authUser, Role $role)
    {
        return  $authUser->hasRole('superAdmin');
    }
    
    public function viewAny(User $authUser)
    {
        return  $authUser->hasRole('superAdmin');
    }

    public function create(User $authUser, Role $role)
    {
        return  $authUser->hasRole('superAdmin');
    }

    public function edit(User $authUser, Role $role)
    {
        return  $authUser->hasRole('superAdmin');
    }
    
    public function update(User $authUser, Role $role)
    {
        return  $authUser->hasRole('superAdmin');
    }

    public function delete(User $authUser, Role $role)
    {
        return  $authUser->hasRole('superAdmin');
    }
}
