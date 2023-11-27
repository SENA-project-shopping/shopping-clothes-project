<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProductCategory extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;
    protected $_guards = [];
    protected $fillable = [
        'descripcion_categoria_producto',
    ];

    public function broadcastOn($event)
    {
        return [$this];
    }
}
