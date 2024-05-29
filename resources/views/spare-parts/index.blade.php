<!-- resources/views/spare_parts/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Pièces de Rechange</h1>
    <a href="{{ route('spareparts.create') }}" class="btn btn-primary mb-3">Ajouter une pièce de rechange</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Référence</th>
                <th>Fournisseur</th>
                <th>Prix</th>
                <th>Niveau de Stock</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($spareparts as $sparepart)
            <tr>
                <td>{{ $sparepart->name }}</td>
                <td>{{ $sparepart->reference }}</td>
                <td>{{ $sparepart->supplier }}</td>
                <td>{{ $sparepart->price }}</td>
                <td>{{ $sparepart->stock_level }}</td>
                <td>
                    <form action="{{ route('spareparts.destroy', $sparepart->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('spareparts.show', $sparepart->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ route('spareparts.edit', $sparepart->id) }}">Modifier</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
