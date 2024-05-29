<!-- resources/views/spare_parts/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de la Pièce de Rechange</h1>
    <a href="{{ route('spareparts.index') }}" class="btn btn-secondary mb-3">Retour</a>

    <table class="table table-bordered">
        <tr>
            <th>Nom</th>
            <td>{{ $sparepart->name }}</td>
        </tr>
        <tr>
            <th>Référence</th>
            <td>{{ $sparepart->reference }}</td>
        </tr>
        <tr>
            <th>Fournisseur</th>
            <td>{{ $sparepart->supplier }}</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>{{ $sparepart->price }}</td>
        </tr>
        <tr>
            <th>Niveau de Stock</th>
            <td>{{ $sparepart->stock_level }}</td>
        </tr>
    </table>
</div>
@endsection
