<?php
namespace Database\Factories;

use App\Models\client as ModelsClient;
use App\Models\Vehicule;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => fake()->word,
            'model' => fake()->word,
            'fuel_type' =>fake()->randomElement(['Diesel', 'Gasoline', 'Electric']),
            'registration_number' =>fake()->unique()->regexify('[A-Z0-9]{8}'),
            'photos' => null,
            'client_id'=> ModelsClient::all()->random()->id // You can modify this to generate random image URLs if needed
        ];
    }
}
