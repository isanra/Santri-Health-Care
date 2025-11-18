<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Obat;
use App\Policies\ObatPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // Map model ke policy
        Obat::class => ObatPolicy::class,
        // tambahkan mapping lain di sini
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();

        // contoh Gate tambahan (opsional)
        Gate::define('manage-obats', fn($user) => $user->hasRole('pharmacist') ?? ($user->is_admin ?? false));
    }
}
