<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',
        'payer_id',
        'receiver_id',
        'full_amount',
        'receiver_amount',
        'sendab_amount',
    ];

    public function payment(){
        return $this->belongsTo(Payment::class);
    }
}
