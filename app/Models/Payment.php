<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'balance_id',
        'order_id',
        'payment_amount',
        'status',
    ];

    public function balance(){
        return $this->belongsTo(Balance::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
