<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $table='vehicules';
    protected $fillable = [
        'brand',
        'model',
        'fuel_type',
        'registration_number',
        'photos',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

