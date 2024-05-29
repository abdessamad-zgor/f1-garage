<?php

namespace Database\Factories;

use App\Models\SparePart;
use Illuminate\Database\Eloquent\Factories\Factory;

class SparepartFactory extends Factory
{
    protected $model = Sparepart::class;

    public function definition()
    {
        return [
            'name' => fake()->word,
            'supplier' => fake()->company,
            'price' => fake()->randomFloat(2, 1, 100),
            'stock_level' => fake()->numberBetween(0, 100),
        ];
    }
}
