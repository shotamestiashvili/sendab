<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'term',
    ];

    public function orders(){
        return $this->belongsTo(Order::class);
    }
}
