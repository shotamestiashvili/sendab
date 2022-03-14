<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartniorPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'partnior_id',
        'price_kg',
        'price_sum',
    ];

    public function partnior(){
        return $this->belongsTo(Partnior::class);
    }
}
