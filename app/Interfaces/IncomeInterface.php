<?php

namespace App\Interfaces;

interface IncomeInterface
{
    public function income($balance_id, $income_amount, $method, $status);
}
