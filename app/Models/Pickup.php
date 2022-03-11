<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;

    protected $table = 'pickups';

    protected $fillable = [
        'order_id',
        'pickup_type',
        'source_city',
        'source_address1',
        'source_address2',
    ];

    public function orders(){
        return $this->belongsTo(Order::class);
    }
}
