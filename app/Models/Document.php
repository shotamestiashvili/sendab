<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'front',
        'back',
        'selfie'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
