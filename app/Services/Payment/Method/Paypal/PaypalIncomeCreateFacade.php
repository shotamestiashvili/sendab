<?php

namespace App\Services\Payment\Method\Paypal;

use App\Interfaces\PaypalIncomeCreateInterface;
use Illuminate\Support\Facades\Request;


class PaypalIncomeCreateFacade
{
    public function __construct(PaypalIncomeCreateInterface $income, $process)
    {
         $income->create($process);
    }
}
