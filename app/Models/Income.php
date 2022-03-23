<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'balance_id',
        'income_amount',
        'method',
        'status',
    ];

    public function balance(){
        return $this->belongsTo(Balance::class);
    }

}
