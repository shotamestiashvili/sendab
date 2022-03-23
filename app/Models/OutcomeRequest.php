<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutcomeRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'paypal_email',
        'requested_amount',
        'balance_amount',
        'Accept',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
