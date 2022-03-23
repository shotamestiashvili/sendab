<?php

namespace App\Services\Income;

use App\Interfaces\IncomeInterface;

class Income implements IncomeInterface
{
    public function income($balance_id, $income_amount, $method, $status){
        \App\Models\Income::create([
            'balance_id' => $balance_id,
            'income_amount' => $income_amount,
            'method' => $method,
            'status' => $status,
        ]);
    }

}
