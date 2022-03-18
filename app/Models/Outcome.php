<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    use HasFactory;

    protected $fillable = [
        'balance_id',
        'outcome_amount',
        'status',
    ];

    public function balance(){
        return $this->belongsTo(Balance::class);
    }
}
