<?php

namespace App\Providers;

// use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Provider\{UserPolicy, RolePolicy, PermissionPolicy};
use App\Models\{User, Role, Permission};

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }
    
    /**
     * Bootstrap services.
     */
    protected $policies = [
        User::class, UserPolicy::class,
        Role::class, RolePolicy::class,
        // Permission::class, PermissionPolicy::class,
    ];
    
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
