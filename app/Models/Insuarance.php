<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insuarance extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'order_value',
        'content',
    ];


    public function order(){
        return $this->belongsTo(Order::class);
    }
}
