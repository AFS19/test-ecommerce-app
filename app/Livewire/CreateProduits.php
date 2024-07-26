<?php

namespace App\Livewire;

use Livewire\Component;

class CreateProduits extends Component
{
    public $name;
    public function rules()
    {
        return [
            // 'product_category_id',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
        ];
    }
    public function create()
    {
        $this->validate();
        // ProductCategory::create($this->modelData());
        // $this->visibleModalForm = false;
        // $this->resetFields();
        // Product::create();
    }
    
    public function render()
    {
        return view('livewire.create-produits');
    }
}
