<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación many-to-many con promociones
    public function promotions()
    {
        return $this->belongsToMany(Promotion::class, 'category_promotion', 'category_id', 'promotion_id');
    }
}
