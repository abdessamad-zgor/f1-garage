<?php

namespace Database\Factories;

use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UtilisateurFactory extends Factory
{
    protected $model = Utilisateur::class;

    public function definition()
    {
        return [
            'firstName' =>fake()->firstName,
            'lastName' =>fake()->lastName,
            'password' => bcrypt('password'), // Vous pouvez utiliser bcrypt pour le hachage sécurisé du mot de passe
            'email' =>fake()->unique()->safeEmail,
            'role' => 'Utilisateur', 
        ];
    }
}