<?php

namespace Database\Factories;

use App\Models\client as ModelsClient;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Vehicule;
use App\Models\Reparation;
use App\Models\utilisateur;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReparationFactory extends Factory
{
    protected $model = Reparation::class;

    public function definition()
    {
        return [
            'description' => fake()->paragraph,
            'status' => fake()->randomElement(['en attente', 'en cours', 'terminée']),
            'startDate' => fake()->date(),
            'endDate' => fake()->date(),
            'mechanicNotes' => fake()->paragraph,
            'clientNotes' =>fake()->paragraph,
            'client_id' => ModelsClient::factory()->create()->id,
            'vehicule_id' => Vehicule::factory()->create()->id,
        ];
    }
}