<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'transport_id',
        'plate_number',
        'flight_number',
        'ticket_number',
        'comment'
    ];

    public function transport(){
        return $this->belongsTo(Transport::class);
    }
}
