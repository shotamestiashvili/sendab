<?php

namespace App\Services\Payment\Method\Paypal;

use App\Interfaces\PaypalIncomeCreateInterface;
use App\Interfaces\PaypalIncomeProcessInterface;
use Illuminate\Support\Facades\Request;


class PaypalIncomeProcessFacade
{
    public function __construct(PaypalIncomeProcessInterface $income, $request)
    {
        $income->process($request);
    }
}
