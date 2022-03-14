<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupType extends Model
{
    use HasFactory;

    protected $fillable = [
        'partnior_id',
        'store',
        'hand',
    ];

    public function partnior(){
        return $this->belongsTo(Partnior::class);
    }
}
