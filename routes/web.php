<?php

use App\Livewire\CreateProduits;
use App\Livewire\DeleteProduits;
use App\Livewire\DetailsProduit;
use App\Livewire\DetailsProduits;
use App\Livewire\ListProduits;
use App\Livewire\UpdateProduits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::group(["middleware" => "auth:api"], function () {
//     Route::get('profile', [AuthController::class, 'profile'])->name("profile");
//     Route::get('refresh', [AuthController::class, 'refreshToken'])->name("refreshToken");
//     Route::get('logout', [AuthController::class, 'logout'])->name("logout");


// produits routes
Route::prefix('/produits')->group(function () {
    Route::get("/list", "index", ListProduits::class);
    Route::get("/create", "create", CreateProduits::class);
    Route::get("/{produitId}/details", "show", DetailsProduits::class);
    Route::get("/{produitId/update", "update", UpdateProduits::class);
    Route::get("/{produitId}", "delete", DeleteProduits::class);
});


// panier et command
// Route::get("/commande", )