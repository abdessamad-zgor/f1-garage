<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Hash;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        User::create([
            'email' => "admin@f1-garage.com",
            'password' => Hash::make("admin"),
            'name' => "Edemond Garo",
            'role' => "admin"
        ]);
        //
        User::create([
            'email' => "tech@f1-garage.com",
            'password' => Hash::make("technician"),
            'name' => "Hector Fistos",
            'role' => "mechanic"
        ]);
    }
}
