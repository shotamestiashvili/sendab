<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'balance_amount',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function incomes(){
        return $this->hasMany(Income::class);
    }

    public function outcomes(){
        return $this->hasMany(Outcome::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
