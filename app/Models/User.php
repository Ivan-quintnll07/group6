<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< Updated upstream
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;  
>>>>>>> Stashed changes

class User extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $fillable = [
<<<<<<< Updated upstream
        'name',
        'email',
        'password',
        'proveedor',
        'tipo_tarjeta',
        'fecha_corte',
        'fecha_pago',
=======
        'name', 'email', 'password',
>>>>>>> Stashed changes
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function favorites()
    {
        return $this->belongsToMany(\App\Models\Promotion::class, 'favorites', 'user_id', 'promotion_id');
    }
}
