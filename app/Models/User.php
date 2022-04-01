<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function avatars(){
        return $this->hasMany( 'App\Models\AvatarPhoto', 'id', 'id' );
    }

    public function customers(){
        return $this->hasMany( Customer::class);
    }

    public function partniors(){
        return $this->hasMany( Partnior::class );
    }

    public function orders(){
        return $this->hasMany( Order::class );
    }

    public function documents(){
        return $this->hasMany( Document::class);
    }

    public function balance(){
        return $this->hasOne(Balance::class);
    }

    public function userCharge(){
        return $this->hasOne(UserCharge::class);
    }

}
