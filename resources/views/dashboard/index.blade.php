<?php
$nav_items = [
    [
        'name'=>'Clients',
        'url'=>'/clients',
        'icon'=>'icons.client',
        'roles' => ['admin']
    ],
    [
        'name'=>'Vehicules',
        'url'=>'/vehicules',
        'icon'=>'icons.vehicule',
        'roles' => ['admin', 'client', 'mechanic']
    ],
    [
        'name'=>'Mechanics',
        'url'=>'/mechanics',
        'icon'=>'icons.mechanic',
        'roles' => ['admin']
    ],
    [
        'name'=>'Spare parts',
        'url'=>'/spare-parts',
        'icon'=>'icons.spare-part',
        'roles' => ['admin', 'mechanic']
    ],
    [
        'name'=>'Repairs',
        'url'=>'/repairs',
        'icon'=>'icons.repair',
        'roles' => ['admin', 'client', 'mechanic']
    ]
];
?>

@extends('layouts.app')
@section('content')
<div class="md:flex">
    @component('components.menu')
        @prop('items'=>$nav_items)
    @endcomponent
    <ul class="flex-column space-y space-y-2 text-sm font-medium text-gray-500 ">
        <li>
        <a href="/clients" class="inline-flex items-center px-2 py-3 text-white bg-blue-700 rounded-lg active w-full " aria-current="page">
                @include('icons.client')
                Clients
            </a>
        </li>
        <li>
            <a href="#" class="inline-flex items-center px-2 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full ">
                @include('icons.vehicule')
                Vehicules
            </a>
        </li>
        <li>
            <a href="/reparations" class="inline-flex items-center px-2 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full ">
               @include('icons.repair')
               Reparations
            </a>
        </li>
        <li>
            <a href="#" class="inline-flex items-center px-2 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full ">
               @include('icons.mechanic')
               Mechanic
            </a>
        </li>
        <li>
            <a href="#" class="inline-flex items-center px-2 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full ">
            @include('icons.spare-part')
            Spare parts</a>
        </li>
    </ul>
    @yield('tab-content')
</div>
@endsection
