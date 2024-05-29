<!-- resources/views/reparations/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Réparation #{{ $reparation->id }}</h1>
    <p><strong>Description:</strong> {{ $reparation->description }}</p>
    <p><strong>Status:</strong> {{ $reparation->status }}</p>
    <p><strong>Date de début:</strong> {{ $reparation->startDate }}</p>
    <p><strong>Date de fin:</strong> {{ $reparation->endDate }}</p>
    <p><strong>Notes du mécanicien:</strong> {{ $reparation->mechanicNotes }}</p>
    <p><strong>Notes du client:</strong> {{ $reparation->clientNotes }}</p>
    <p><strong>Client:</strong> {{ $reparation->client->name }}</p>
    <p><strong>Véhicule:</strong> {{ $reparation->vehicule->model }}</p>
    <a href="{{ route('reparations.index') }}" class="btn btn-primary">Retour à la liste</a>
</div>
@endsection
