<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnior extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status',
        'sendab_offer',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function routes(){
        return $this->hasMany(Route::class);
    }

    public function transports(){
        return $this->hasMany(Transport::class);
    }

    public function parcels(){
        return $this->hasMany(Parcel::class);
    }

    public function pickupTypes(){
        return $this->hasMany(PickupType::class);
    }

    public function partniorPrices(){
        return $this->hasMany(PartniorPrice::class);
    }

    public function reoffers(){
        return $this->hasMany(Reoffer::class);
    }

    public function offers(){
        return $this->hasMany(Offer::class);
    }


}
