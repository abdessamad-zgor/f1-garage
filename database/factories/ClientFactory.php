<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition()
    {
        return [
            'firstName' =>fake()->firstName,
            'lastName' => fake()->lastName,
            'adress' => fake()->address,
            'phoneNumber' => fake()->phoneNumber,
            'utilisateur_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
        ];
    }
}