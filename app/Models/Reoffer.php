<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reoffer extends Model
{
    use HasFactory;

    protected $fillable = [
      'partnior_id',
      'reoffer',
    ];

    public function partnior(){
        return $this->belongsTo(Partnior::class);
    }
}
