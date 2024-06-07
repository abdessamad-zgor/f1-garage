<?php

use App\Http\Controllers\AuthController;
use App\Models\SparePart;
use App\Models\Reparation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\ReparationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'login_view']);

Route::get('/signup', [AuthController::class, 'signup_view']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::post("/login", [AuthController::class, 'login']);
Route::post("/signup", [AuthController::class, 'signup']);

Route::get("/dashboard", function () {
    if (Auth::user()->role == 'client') {
        return view("vehicules/index");
    } elseif (Auth::user()->role == 'admin') {
        return view("clients/index");
    } elseif (Auth::user()->role == 'mechanic') {
        return view('reparations/index');
    }
})->middleware('auth');

Route::get('/clients', [ClientController::class, 'index']);

Route::get('/vehicules', [VehiculeController::class, 'index']);

Route::post('/vehicules/search', [VehiculeController::class, 'search'])->name('vehicules.search');

Route::post('/vehicules/delete', [VehiculeController::class, 'delete'])->name('vehicules.delete');

Route::post('/vehicules/showModal', [VehiculeController::class, 'showModal'])->name('vehicules.showModal');
//Route::get('/changeLocale/{locale}',[ProductController::class,'changeLocale'])->name('products.changeLocale');

Route::get('/changeLocale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('vehicules.changeLocale');

Route::resource('reparations', ReparationController::class);


Route::post('/reparations/search', [ReparationController::class, 'search'])->name('reparations.search');

Route::post('/reparations/delete', [ReparationController::class, 'delete'])->name('reparations.delete');

Route::post('/reparations/showModal', [ReparationController::class, 'showModal'])->name('reparations.showModal');

Route::resource('spareparts', SparepartController::class);

Route::post('/spareparts/search', [SparepartController::class, 'search'])->name('spareparts.search');

Route::post('/spareparts/delete', [SparepartController::class, 'delete'])->name('spareparts.delete');

Route::post('/spareparts/showModal', [SparepartController::class, 'showModal'])->name('spareparts.showModal');
