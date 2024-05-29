<!-- resources/views/reparations/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Créer une nouvelle réparation</h1>

    <form action="{{ route('reparations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="en attente">En attente</option>
                <option value="en cours">En cours</option>
                <option value="terminée">Terminée</option>
            </select>
        </div>
        <div class="form-group">
            <label for="startDate">Date de début</label>
            <input type="date" name="startDate" class="form-control">
        </div>
        <div class="form-group">
            <label for="endDate">Date de fin</label>
            <input type="date" name="endDate" class="form-control">
        </div>
        <div class="form-group">
            <label for="mechanicNotes">Notes du mécanicien</label>
            <textarea name="mechanicNotes" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="clientNotes">Notes du client</label>
            <textarea name="clientNotes" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="client_id">Client</label>
            <select name="client_id" class="form-control" required>
                @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="vehicle_id">Véhicule</label>
            <select name="vehicle_id" class="form-control" required>
                @foreach($vehicles as $vehicle)
                <option value="{{ $vehicle->id }}">{{ $vehicle->model }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection
