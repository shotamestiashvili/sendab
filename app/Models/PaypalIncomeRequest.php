<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaypalIncomeRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'paypal_order_id',
        'status',
        'link1',
        'rel1',
        'method1',
        'link2',
        'rel2',
        'method2',
        'link3',
        'rel3',
        'method3',
        'link4',
        'rel4',
        'method4',
    ];

}
