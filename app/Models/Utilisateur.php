<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'password',
        'email',
        'role',
        // Ajoutez d'autres colonnes si nécessaire
    ];

    // Définition des relations
    // public function clients()
    // {
    //     return $this->hasMany(Client::class);
    // }

    // public function repairs()
    // {
    //     return $this->hasMany(Repair::class, 'mechanicID');
    // }
}