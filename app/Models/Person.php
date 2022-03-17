<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'firstname',
        'lastname',
        'phone',
        'email',
        'company_name',
        'country',
        'city',
        'address1',
        'address2',
        'postal',
        'comment',
    ];


    public function order(){
        return $this->belongsTo(Order::class);
    }

}
