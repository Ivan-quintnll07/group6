<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use Notifiable, HasFactory;
    use Notifiable, HasFactory;

    protected $fillable = [

        'name',
        'email',
        'password',
        'proveedor',
        'tipo_tarjeta',
        'fecha_corte',
        'fecha_pago',

        'name', 'email', 'password',


        'name', 'email', 'password',

    ];

    protected $hidden = [
        'password', 'remember_token',
        'password', 'remember_token',
    ];

    public function favorites()
    {
        return $this->belongsToMany(\App\Models\Promotion::class, 'favorites', 'user_id', 'promotion_id');
        return $this->belongsToMany(\App\Models\Promotion::class, 'favorites', 'user_id', 'promotion_id');
    }
}
