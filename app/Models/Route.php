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
        'destination',
        'source_time',
        'route1_time',
        'route2_time',
        'route3_time',
        'route4_time',
        'route5_time',
        'route6_time',
        'destination_time',

    ];

    public function partnior(){
        return $this->belongsTo(Partnior::class);
    }
}
