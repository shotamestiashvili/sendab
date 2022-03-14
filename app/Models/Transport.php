<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $fillable = [
        'partnior_id',
        'airplane',
        'car',
        'minibus',
        'railway',
        'other',
    ];

    public function partnior(){
        return $this->belongsTo(Partnior::class);
    }

    public function transportInfos(){
        return $this->hasMany(TransportInfo::class);
    }
}
