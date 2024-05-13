<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Card;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Calendar extends Model
{
    use HasFactory;
    public function Card(){
        return $this->belongsTo(Card::class);

    }
}


{
    public function Card(){

        return $this->belongsTo(User::class);
    }
}

