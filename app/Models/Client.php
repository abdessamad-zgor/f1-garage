<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'adress',
        'phoneNumber',
        'user_id',
    ];

    // Définition de la relation
    public function user()
    {
        return $this->belongsTo(Utilisateur::class, 'user_id');
    }
}
