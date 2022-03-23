<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaypalIncomeProcess extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
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
