<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'firstname',
        'lastname',
        'birthdate',
        'phone',
        'country',
        'city',
        'address1',
        'address2',
        'postal',
        'terms',
        'verified',
    ];

    protected $dates= ['birthdate'];

    public function user(){
        return $this->belongsTo( User::class);
    }
}
