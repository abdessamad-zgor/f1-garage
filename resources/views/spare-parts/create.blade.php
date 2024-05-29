<!-- resources/views/spare_parts/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter une Pièce de Rechange</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('spareparts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom:</label>
            <input type="text" name="name" class="form-control" placeholder="Nom" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="reference">Référence:</label>
            <input type="text" name="reference" class="form-control" placeholder="Référence" value="{{ old('reference') }}">
        </div>
        <div class="form-group">
            <label for="supplier">Fournisseur:</label>
            <input type="text" name="supplier" class="form-control" placeholder="Fournisseur" value="{{ old('supplier') }}">
        </div>
        <div class="form-group">
            <label for="price">Prix:</label>
            <input type="number" step="0.01" name="price" class="form-control" placeholder="Prix" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <label for="stock_level">Niveau de Stock:</label>
            <input type="number" name="stock_level" class="form-control" placeholder="Niveau de Stock" value="{{ old('stock_level') }}">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
