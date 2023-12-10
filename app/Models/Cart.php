<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cart extends Model
{
    use HasFactory;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $_guards = [];
    protected $fillable = [
        'id',
        'nombre_cliente',
        'email_cliente',
        'ciudad_residencia',
        'direccion_residencia',
        'telefono',
        'created_at',
        'updated_at',
    ];
}
