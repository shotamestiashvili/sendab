<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvatarPhoto extends Model
{
    use HasFactory;

    protected $table = 'avatar_photos';

    protected $fillable = [

        'uploaded_by',
        'file_url',
    ];


    public function user(){
        return $this->belongsTo('App\Models\User', 'uploaded_by', 'id');
    }
}
