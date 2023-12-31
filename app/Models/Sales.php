<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Sales extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;

    protected $_guards = [];
    protected $fillable = [
        'codigo_venta',
        'fecha_facturacion',
        'precio_total',
        'forma_pago_id',
    ];

    public function formaPago() 
    {
        return $this->belongsTo(FormaPago::class, 'forma_pago_id');
    }

    public function broadcastOn($event)
    {
        return [$this];
    }
}
