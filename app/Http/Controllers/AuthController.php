<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function login_view(Request $request)
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('auth.signin');
    }

    public function signup_view(Request $request)
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('auth.signup');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        Log::info(print_r($credentials, true));
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $user = User::where('email', $request->email);
            $request->session()->regenerate();
            return redirect('/dashboard');
        } else {
            Log::error("Error: Invalid credentials");
            return back()->withErrors([
                'email' => 'invalid credentials, try again!'
            ]);
        }
    }

    public function signup(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:8',
                'password_confirmation' => 'required|min:8',
            ]);

            $userData = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'client'
            ];

            $user = User::create($userData);
            return redirect('/login');
        } catch (ValidationException $err) {
            Log::error("Failed because", $err->errors());
            $errors = $err->validator->errors();
            return back()->withErrors($errors);
        }
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        return redirect('/login');
    }
}
