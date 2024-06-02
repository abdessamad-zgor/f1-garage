<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
        } else {
        }
        return view('clients.index');
    }

    public function create()
    {
        return view('clients.create');
    }
    public function store(Request $request)

    {
        // Validation des données entrantes
        $data = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'phoneNumber' => 'required',
        ]);
        // Create a new user
        $user = User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'password' => bcrypt($data['firstName'] . '-' . $data['lastName'] . '@@'),
            'role' => 'client',
        ]);
        unset($data['email']);
        // $client = new client($data) ;
        // $client ->user()->associate($user);
        // $client ->save();
        $client = new Client($data);
        $client->utilisateur_id = $user->id;
        $client->save();
        return redirect('/clients')->with('success', 'client created succefully');
    }
}
