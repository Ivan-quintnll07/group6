<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_id',
        'business',
        'image',
        'logo',
        'title',
        'benefit',
        'restriction',
        'category',
        'condiciones',
        'aplica_para',
        'nota',
    ];

    public function favoritedByUsers()
    {
        return $this->belongsToMany(User::class, 'favorite_promotions')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_promotion')->withTimestamps();
    }
}
