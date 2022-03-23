<?php

namespace App\Services\Income;

use App\Interfaces\IncomeInterface;

class IncomeFacade
{
    public function __construct(IncomeInterface $outcome, $balance_id, $income_amount, $method, $status )
    {
        return $outcome->income($balance_id, $income_amount, $method, $status);
    }
}
