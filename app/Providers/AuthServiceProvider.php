<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

function checkDatabaseConnection()
{
    try {
        DB::connection()->getPdo();
        return true; // Connection successful
    } catch (\Exception $e) {
        return false; // Connection failed
    }
}

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
        if (checkDatabaseConnection()) {
            $default_admin = [
                'email' => "admin@f1-garage.com",
                'password' => Hash::make("admin"),
                'name' => "Edemond Garo",
                'role' => "admin"
            ];

            $default_tech = [
                'email' => "tech@f1-garage.com",
                'password' => Hash::make("technician"),
                'name' => "Hector Fistos",
                'role' => "mechanic"
            ];

            if (!User::where('email', $default_admin['email'])->exists()) User::create($default_admin);
            //
            if (!User::where('email', $default_tech['email'])->exists()) User::create($default_tech);
        }
    }
}
