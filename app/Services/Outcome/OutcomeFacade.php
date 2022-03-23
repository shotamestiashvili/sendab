<?php

namespace App\Services\Outcome;

use App\Interfaces\OutcomeInterface;

class OutcomeFacade
{
    public function __construct(OutcomeInterface $outcome, $balance_id, $outcome_amount, $method, $status )
    {
        return $outcome->outcome($balance_id, $outcome_amount, $method, $status);
    }
}
