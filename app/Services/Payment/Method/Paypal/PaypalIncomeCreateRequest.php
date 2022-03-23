<?php

namespace App\Services\Payment\Method\Paypal;

use App\Interfaces\PaypalIncomeCreateInterface;
use App\Models\PaypalIncomeProcess;
use App\Models\PaypalIncomeRequest;
use App\Services\Income\Income;
use App\Services\Income\IncomeFacade;
use App\Services\Outcome\OutcomeFilter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalIncomeCreateRequest implements PaypalIncomeCreateInterface
{
    public function create($response)
    {
        PaypalIncomeRequest::create([
            'user_id'         => 1,
            'paypal_order_id' => $response['id'],
            'status'          => $response['status'],
            'link1'           => $response['links'][0]['href'],
            'rel1'            => $response['links'][0]['rel'],
            'method1'         => $response['links'][0]['method'],

            'link2'           => $response['links'][1]['href'],
            'rel2'            => $response['links'][1]['rel'],
            'method2'         => $response['links'][1]['method'],

            'link3'           => $response['links'][2]['href'],
            'rel3'            => $response['links'][2]['rel'],
            'method3'         => $response['links'][2]['method'],

            'link4'           => $response['links'][3]['href'],
            'rel4'            => $response['links'][3]['rel'],
            'method4'         => $response['links'][3]['method'],
        ]);

    }
}
