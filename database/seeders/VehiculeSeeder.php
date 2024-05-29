<?php

use Illuminate\Database\Seeder;
use App\Models\Vehicule;
use App\Models\client;

class VehiculeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Récupérer un ID de client existant
        $client = Client::first();

        // Insérer des enregistrements de véhicules avec le client_id récupéré
        Vehicule::create([
            'client_id' => $client->id,
            'brand' => 'Nom de la marque',
            'model' => 'Nom du modèle',
            'fuel_type' => 'Type de carburant',
            'registration_number' => 'Numéro d\'immatriculation',
            'photos' => 'Chemin/URL des photos',
        ]);

        // Ajoutez d'autres enregistrements de véhicules si nécessaire
    }
}
