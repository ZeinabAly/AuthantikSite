<?php

namespace App\Policies;

use App\Models\User;

class CategoryPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function create(User $authUser, Category $category)
    {
        return  $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }

    public function edit(User $authUser, Category $category)
    {
        return  $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }
    
    public function update(User $authUser, Category $category)
    {
        return  $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }

    public function delete(User $authUser, Category $category)
    {
        return  $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }
}
