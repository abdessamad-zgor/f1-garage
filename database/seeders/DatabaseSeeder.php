<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\utilisateur::factory(10)->create();
        \App\Models\client::factory(10)->create();
        \App\Models\Vehicule::factory(10)->create();
        \App\Models\Reparation::factory(10)->create();
        \App\Models\Sparepart::factory(10)->create();


        
    }
}
