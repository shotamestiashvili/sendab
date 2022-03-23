<?php

namespace App\Services\Outcome;

use App\Models\Balance;

class OutcomeFilter
{
    protected $balance;

    public function __construct($user_id, $amount)
    {
        $this->balance = Balance::where('user_id', $user_id)->value('balance_amount');

        if ($amount <= $this->balance) {
            return true;
        } else {
            return false;
        }
    }
}
