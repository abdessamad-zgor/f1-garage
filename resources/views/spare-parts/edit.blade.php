<!-- resources/views/spare_parts/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier une Pièce de Rechange</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('spareparts.update', $sparepart->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nom:</label>
            <input type="text" name="name" class="form-control" value="{{ $sparepart->name }}">
        </div>
        <div class="form-group">
            <label for="reference">Référence:</label>
            <input type="text" name="reference" class="form-control" value="{{ $sparepart->reference }}">
        </div>
        <div class="form-group">
            <label for="supplier">Fournisseur:</label>
            <input type="text" name="supplier" class="form-control" value="{{ $sparepart->supplier }}">
        </div>
        <div class="form-group">
            <label for="price">Prix:</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ $sparepart->price }}">
        </div>
        <div class="form-group">
            <label for="stock_level">Niveau de Stock:</label>
            <input type="number" name="stock_level" class="form-control" value="{{ $sparepart->stock_level }}">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection
