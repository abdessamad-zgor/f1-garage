<?php

use App\Http\Controllers\AuthController;
use App\Models\SparePart;
use App\Models\Reparation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\ReparationController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view("auth/signin");
});

Route::get('/signup', function () {
    return view("auth/signup");
});

Route::post("/login", [AuthController::class, 'login']);
Route::post("/signup", [AuthController::class, 'signup']);

Route::get("/dashboard", function () {
    return view("clients/index");
});

Route::resource('/clients', ClientController::class);

Route::resource('vehicules', VehiculeController::class);

Route::get('/test', [VehiculeController::class, 'test'])->name('test');

Route::post('/vehicules/search', [VehiculeController::class, 'search'])->name('vehicules.search');

Route::post('/vehicules/delete', [VehiculeController::class, 'delete'])->name('vehicules.delete');

Route::post('/vehicules/showModal', [VehiculeController::class, 'showModal'])->name('vehicules.showModal');
//Route::get('/changeLocale/{locale}',[ProductController::class,'changeLocale'])->name('products.changeLocale');

Route::get('/changeLocale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('vehicules.changeLocale');



Route::resource('reparations', ReparationController::class);


Route::get('/test', [ReparationController::class, 'test'])->name('test');

Route::post('/reparations/search', [ReparationController::class, 'search'])->name('reparations.search');

Route::post('/reparations/delete', [ReparationController::class, 'delete'])->name('reparations.delete');

Route::post('/reparations/showModal', [ReparationController::class, 'showModal'])->name('reparations.showModal');



Route::resource('spareparts', SparepartController::class);


Route::get('/test', [SparepartController::class, 'test'])->name('test');

Route::post('/spareparts/search', [SparepartController::class, 'search'])->name('spareparts.search');

Route::post('/spareparts/delete', [SparepartController::class, 'delete'])->name('spareparts.delete');

Route::post('/spareparts/showModal', [SparepartController::class, 'showModal'])->name('spareparts.showModal');
