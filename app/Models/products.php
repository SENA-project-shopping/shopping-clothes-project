<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $_guards = [];
    protected $fillable = [
        'id',
        'codigo_producto',
        'nombre_producto',
        'cantidad_producto',
        'precio_producto',
        'product_categories_id',
        'created_at',
        'updated_at',
    ];

    public function categoriesProducts()
    {
        return $this->belongsTo(ProductCategory::class, 'product_categories_id');
    }
}
