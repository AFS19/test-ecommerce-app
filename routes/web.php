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
    return view('dashboard');
});

// Route::group(["middleware" => "auth:api"], function () {
//     Route::get('profile', [AuthController::class, 'profile'])->name("profile");
//     Route::get('refresh', [AuthController::class, 'refreshToken'])->name("refreshToken");
//     Route::get('logout', [AuthController::class, 'logout'])->name("logout");


// produits routes
Route::prefix('/produits')->group(function () {
    Route::get("/list",  ListProduits::class)->name("list");
    Route::get("/create", CreateProduits::class)->name("create");
    Route::get("/{produitId}/details", DetailsProduits::class)->name("details");
    Route::get("/{produitId/update",  UpdateProduits::class)->name("update");
    Route::get("/{produitId}", DeleteProduits::class)->name("delete");
});


// panier et command
// Route::get("/commande", )