<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $req): RedirectResponse
    {
        printf("Hello login");
        return redirect('/dashboard');
    }

    public function signup(Request $req): RedirectResponse
    {
        printf("Hello signup");
        return redirect('/verify-email');
    }
}
