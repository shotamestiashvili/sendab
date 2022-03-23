<?php

namespace App\Observers;

use App\Models\Balance;
use App\Models\User;

class UserObserver
{
    public function created(User $user){
        Balance::create([
            'user_id' => $user->id,
            'balance_amount' => 0,
        ]);
    }
}
