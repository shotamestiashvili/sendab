<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaypalPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'status',
        'payer_id',
        'payer_name',
        'payer_surname',
        'payer_email',
        'transaction_id',
        'currency',
        'amount',
        'checkout',
    ];
}
