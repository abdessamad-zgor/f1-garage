<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Symfony\Component\HttpFoundation\Response;


class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!FacadesAuth::check()) {
            return redirect('/login');
        }
        //else{
        //$url = $request->url();
        //if (Auth::user()->role == 'client' && in_array()) {
        //    return view("vehicules/index");
        //} elseif (Auth::user()->role == 'admin' && !) {
        //    return view("clients/index");
        //} elseif (Auth::user()->role == 'mechanic' && !) {
        //    return view('reparations/index');
        //}
        //}
        return $next($request);
    }

    static function is_allowed_url(string $url, string $role)
    {
        $is_valid = false;
        switch ($role) {
            case 'client':
                $is_valid = !preg_match("/(" . implode("|", ["mechanics", "spare-parts", "clients", ""]) . ")/", $url);
            case "admin":
                $is_valid = true;
            case "mechanic":
                $is_valid = !preg_match("/(" . implode("|", ["", "", "", ""]) . ")/", $url);
        }
        return $is_valid;
    }
}
