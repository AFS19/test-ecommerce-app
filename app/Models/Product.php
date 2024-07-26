<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_category_id',
        'title',
        'description',
        'price',
        'image',
    ];

    public function category()
    {
        return $this->hasOne(ProductCategory::class, 'categories_id', 'id');
    }
}
