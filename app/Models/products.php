<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Products extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;

    protected $_guards = [];
    protected $fillable = [
        'id',
        'codigo_producto',
        'nombre_producto',
        'cantidad_producto',
        'precio_producto',
        'product_categories_id',
        'talla_categories_id',
        'color_categories_id',
        'genero_categories_id',
        'descripcion_detallada',
        'created_at',
        'updated_at',
    ];

    public function categoryProduct()
    {
        return $this->belongsTo(ProductCategory::class, 'product_categories_id');
    }

    public function tallaCategoryProduct()
    {
        return $this->belongsTo(TallaCategory::class, 'talla_categories_id');
    }

    public function colorCategoryProduct()
    {
        return $this->belongsTo(ColorCategory::class, 'color_categories_id');
    }

    public function generoCategoryProduct()
    {
        return $this->belongsTo(GeneroCategory::class, 'genero_categories_id');
    }

    public function broadcastOn($event)
    {
        return [$this];
    }
}
