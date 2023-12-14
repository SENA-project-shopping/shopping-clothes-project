<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $_guards = [];
    protected $fillable = [
        'name',
        'email',
        'document_types_id',
        'document_user',
        'pais_nacimiento',
        'phone',
        'direccion_residencia',
        'ciudad_residencia',
        'password',
        'rol_users_id',
        'state_users_id',
    ];

    public function documentTypes() 
    {
        return $this->belongsTo(DocumentType::class, 'document_types_id');
    }

    public function rolUser()
    {
        return $this->belongsTo(RolUser::class, 'rol_users_id');
    }

    public function stateUser()
    {
        return $this->belongsTo(StateUser::class, 'state_users_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function broadcastOn($event)
    {
        return [$this];
    }
}
