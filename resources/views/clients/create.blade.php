@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Créer un nouveau client</h1>
        <form method="POST" action="/clients">
            @csrf
            <div class="form-group">
                <label for="firstName">Nom :</label>
                <input type="text" name="firstName" id="firstName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastName">Prénom :</label>
                <input type="text" name="lastName" id="lastName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="adress">Adresse :</label>
                <input type="text" name="adress" id="adress" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phoneNumber">Téléphone :</label>
                <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" required>
            </div>
            <button type="submit"> Save </button>
        </form>
    </div>
@endsection