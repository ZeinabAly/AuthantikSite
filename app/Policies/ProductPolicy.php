<?php

namespace App\Policies;

use App\Models\User;

class ProductPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    
    public function create(User $authUser, Product $product)
    {
        return  $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }

    public function edit(User $authUser, Product $product)
    {
        return  $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }
    
    public function update(User $authUser, Product $product)
    {
        return  $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }

    public function delete(User $authUser, Product $product)
    {
        return  $authUser->hasRole('superAdmin') || $authUser->hasRole('admin') || $authUser->hasRole('manager');
    }
}
