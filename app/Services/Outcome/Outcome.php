<?php

namespace App\Services\Outcome;

use App\Interfaces\OutcomeInterface;

class Outcome implements OutcomeInterface
{
    public function outcome($balance_id, $outcome_amount, $method, $status){
        \App\Models\Outcome::create([
            'balance_id' => $balance_id,
            'outcome_amount' => $outcome_amount,
            'method' => $method,
            'status' => $status,
        ]);
    }
}
