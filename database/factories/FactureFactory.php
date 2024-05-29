<?php

namespace Database\Factories;

use App\Models\Repair;
use App\Models\facture;
use App\Models\Invoice;
use App\Models\Reparation;
use Illuminate\Database\Eloquent\Factories\Factory;

class FactureFactory extends Factory
{
    protected $model = facture::class;

    public function definition()
    {
        return [
            'repairID' => Reparation::factory(),
            'additionalCharges' =>fake()->randomFloat(2, 0, 1000),
            'totalAmount' =>fake()->randomFloat(2, 50, 10000),
        ];
    }
}
