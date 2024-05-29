<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function index()
    {
        $Utilisateur = Utilisateur::all();
        return view('Utilisateurs.index', compact('Utilisateurs'));
    }

    // Ajoutez les autres méthodes du contrôleur (store, update, destroy) selon vos besoins
}