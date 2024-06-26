<?php

namespace App\Http\Controllers;

use App\Models\Client as ModelsClient;
use App\Models\Vehicule;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;


class VehiculeController extends Controller
{

    public function index(): View
    {
        $vehicules = Vehicule::all();
        return view('vehicules.index', ['vehicules' => $vehicules]);
    }

    public function search(): View
    {
        $vehicules = Vehicule::where('model', 'like', '%' . request('search') . '%')
            ->orWhere('fuel_type', 'like', '%' . request('search') . '%')
            ->get();

        return view('vehicules.search', compact('vehicules'));
    }

    public function delete(Request $request)
    {
        $vehicule = Vehicule::find($request->deleteId);
        $vehicule->delete();
        return "ok";
    }

    public function showModal(Request $request)
    {
        $vehicule = Vehicule::find($request->id);
        return view("modals.showVehicule", compact('vehicule'));
    }

    public function create(): View
    {
        return view('vehicules.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'client_id' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'fuel_type' => 'required',
            'registration_number' => 'required',
            'photos' => 'required',
        ]);

        $vehicule = new Vehicule($request->all());
        $client = ModelsClient::findOrFail($request->input('client_id')); // Assuming you have a Client model
        $client->vehicules()->save($vehicule);

        return redirect()->route('vehicules.index')
            ->with('success', 'vehicule created successfully.');
    }

    public function show(Vehicule $vehicule): View
    {
        return view('vehicules.show', compact('vehicule'));
    }

    public function edit(Vehicule $vehicule): View
    {
        return view('vehicules.edit', compact('vehicule'));
    }

    public function update(Request $request, Vehicule $vehicule): RedirectResponse
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'fuel_type' => 'required',
            'registration_number' => 'required',
            'photos' => 'required',
        ]);

        $vehicule->update($request->all());

        return redirect()->route('vehicules.index')
            ->with('success', 'vehicule updated successfully');
    }

    public function destroy(Vehicule $vehicule): RedirectResponse
    {
        $vehicule->delete();

        return redirect()->route('vehicules.index')
            ->with('success', 'vehicules deleted successfully');
    }
}
