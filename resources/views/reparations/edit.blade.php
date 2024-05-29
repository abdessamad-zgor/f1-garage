<!-- resources/views/reparations/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Éditer la réparation #{{ $reparation->id }}</h1>

    <form action="{{ route('reparations.update', $reparation) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="description
