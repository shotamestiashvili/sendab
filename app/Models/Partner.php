<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plateNumer',
        'carModel',
        'sourceCountry',
        'sourceCity',
        'sourceDate',
        'sourceTime',
        'destinationDate1',
        'destinationTime1',
        'destinationDate2',
        'destinationDate3',
        'destinationCity1',
        'destinationCity2',
        'destinationCity3',
        'airplane',
        'car',
        'minibus',
        'railway',
        'anyParcel',
        'laptop',
        'smartphone',
        'clothes',
        'oneKg',
        'twoKg',
        'fiveKg',
        'tenKg',
        'twentyKg',
        'twentyKgPlus',
        'length',
        'width',
        'height',
        'fromStore',
        'byHand',
        'enteredKgPrice',
        'enteredOrderPrice',
        'clientOffer',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
