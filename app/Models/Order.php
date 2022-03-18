<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'user_id',
        'offer_id',
        'amount',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function offer(){
        return $this->belongsTo(Offer::class);
    }

    public function pickups(){
        return $this->hasMany(Pickup::class);
    }

    public function people(){
        return $this->hasMany(Person::class);
    }

    public function insuarance(){
        return $this->hasMany(Insuarance::class);
    }

    public function terms(){
        return $this->hasMany(Term::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }



}
