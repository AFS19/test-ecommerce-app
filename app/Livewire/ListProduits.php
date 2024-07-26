<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ListProduits extends Component
{
    
    public function render()
    {
        return view('livewire.list-produits');
    }
}
