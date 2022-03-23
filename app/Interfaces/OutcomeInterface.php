<?php

namespace App\Interfaces;

interface OutcomeInterface
{
    public function outcome($balance_id, $outcome_amount, $method, $status);
}
