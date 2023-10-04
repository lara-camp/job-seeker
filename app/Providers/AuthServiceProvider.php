<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Category;
use App\Models\FAQ;
use App\Models\JobPost;
use App\Models\Type;
use App\Models\User;
use App\Policies\CategoryPolicy;
use App\Policies\FAQPolicy;
use App\Policies\JobPostPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\TypePolicy;
use App\Policies\UserPolicy;
// use App\Policies\EmployeePolicy;
use App\Policies\RolePolicy;
use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Access\Gate as AccessGate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Spatie\Permission\Models\Permission;

use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class       => UserPolicy::class,
        Role::class       => RolePolicy::class,
        Permission::class => PermissionPolicy::class,

        JobPost::class => JobPostPolicy::class,
        Category::class       => CategoryPolicy::class,
        Type::class       => TypePolicy::class,

        FAQ::class       => FAQPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // FacadesGate::before(function (User $user, string $ability) {
        //     return $user->isSuperAdmin() ? true: null;     
        // });
    }
}
