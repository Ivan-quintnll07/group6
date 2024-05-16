<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CardType;

class Card extends Model
{
    use HasFactory;
    public function CardType(){
        return $this->belongsTo(CardType::class);
    }
}
