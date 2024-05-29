<?php
// app/Http/Controllers/ReparationController.php

namespace App\Http\Controllers;

use App\Models\Reparation;
use App\Models\User;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class ReparationController extends Controller
{
    // Afficher la liste des réparations
    public function index()
    {
        $reparations = Reparation::with('client', 'vehicule')->get();
        return view('reparations.index', compact('reparations'));
    }

    // Afficher le formulaire de création d'une nouvelle réparation
    public function create()
    {
        $clients = User::all(); // Assurez-vous que 'User' représente les clients
        $vehicles = Vehicule::all();
        return view('reparations.create', compact('clients', 'vehicles'));
    }

    // Enregistrer une nouvelle réparation
    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string',
            'status' => 'required|string',
            'startDate' => 'nullable|date',
            'endDate' => 'nullable|date',
            'mechanicNotes' => 'nullable|string',
            'clientNotes' => 'nullable|string',
            'client_id' => 'required|exists:users,id',
            'vehicule_id' => 'required|exists:vehicules,id',
        ]);

        // Vérification des données validées
        // dd($validated);

        Reparation::create($validated);

        return redirect()->route('reparations.index')->with('success', 'Réparation créée avec succès.');
    }

    // Afficher les détails d'une réparation
    public function show(Reparation $reparation)
    {
        return view('reparations.show', compact('reparation'));
    }

    // Afficher le formulaire d'édition d'une réparation
    public function edit(Reparation $reparation)
    {
        $clients = User::all();
        $vehicles = Vehicule::all();
        return view('reparations.edit', compact('reparation', 'clients', 'vehicles'));
    }

    // Mettre à jour une réparation
    public function update(Request $request, Reparation $reparation)
    {
        $validated = $request->validate([
            'description' => 'required|string',
            'status' => 'required|string',
            'startDate' => 'nullable|date',
            'endDate' => 'nullable|date',
            'mechanicNotes' => 'nullable|string',
            'clientNotes' => 'nullable|string',
            'client_id' => 'required|exists:users,id',
            'vehicle_id' => 'required|exists:vehicules,id',
        ]);

        $reparation->update($validated);

        return redirect()->route('reparations.index')->with('success', 'Réparation mise à jour avec succès.');
    }

    // Supprimer une réparation
    public function destroy(Reparation $reparation)
    {
        $reparation->delete();

        return redirect()->route('reparations.index')->with('success', 'Réparation supprimée avec succès.');
    }
}
