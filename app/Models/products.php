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
        'created_at',
        'updated_at',
    ];

    public function categoryProduct()
    {
        return $this->belongsTo(ProductCategory::class, 'product_categories_id');
        return $this->belongsTo(TallaCategoria::class, '');
        return $this->belongsTo(ColorCategoria::class, '');
        return $this->belongsTo(GeneroCategoria::class, '');
    }

    public function broadcastOn($event)
    {
        return [$this];
    }
}
