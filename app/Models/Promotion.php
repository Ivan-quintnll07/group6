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
        'category'
    ];
}

