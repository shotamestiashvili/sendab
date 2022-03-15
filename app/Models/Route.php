<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'partnior_id',
        'source',
        'route1',
        'route2',
        'route3',
        'route4',
        'route5',
        'route6',
        'destination'
    ];

    public function partnior(){
        return $this->belongsTo(Partnior::class);
    }
}
