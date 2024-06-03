<?php
$nav_items = [
    [
        'name'=>'Clients',
        'url'=>'/clients',
        'icon'=>'client',
        'roles' => ['admin']
    ],
    [
        'name'=>'Vehicules',
        'url'=>'/vehicules',
        'icon'=>'vehicule',
        'roles' => ['admin', 'client', 'mechanic']
    ],
    [
        'name'=>'Mechanics',
        'url'=>'/mechanics',
        'icon'=>'mechanic',
        'roles' => ['admin']
    ],
    [
        'name'=>'Spare parts',
        'url'=>'/spare-parts',
        'icon'=>'spare-part',
        'roles' => ['admin', 'mechanic']
    ],
    [
        'name'=>'Repairs',
        'url'=>'/repairs',
        'icon'=>'repair',
        'roles' => ['admin', 'client', 'mechanic']
    ]
];
?>

@extends('layouts.app')
@section('content')
<div class="md:flex">
    @component('components.menu', ['items'=>$nav_items])
    @endcomponent

    @yield('tab-content')
</div>
@endsection
