<?php

namespace App\Services\Payment\Method\Paypal;

use App\Interfaces\PaypalIncomeCreateInterface;
use App\Interfaces\PaypalIncomeProcessInterface;
use App\Models\PaypalIncomeProcess;
use App\Models\PaypalIncomeRequest;
use App\Services\Income\Income;
use App\Services\Income\IncomeFacade;
use App\Services\Outcome\OutcomeFilter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalIncomeProcessRequest implements PaypalIncomeProcessInterface
{

    public function process($response){

        PaypalIncomeProcess::create([
            'user_id'        => 1,
            'token'          => $response['id'],
            'status'         => $response['status'],
            'payer_id'       => $response['payer']['payer_id'],
            'payer_name'     => $response['payer']['name']['given_name'],
            'payer_surname'  => $response['payer']['name']['surname'],
            'payer_email'    => $response['payer']['email_address'],
            'transaction_id' => $response['purchase_units'][0]['payments']['captures'][0]['id'],
            'payment_status' => $response['purchase_units'][0]['payments']['captures'][0]['status'],
            'currency'       => $response['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'],
            'amount'         => $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'],
            'checkout'       => $response['links'][0]['href'],
        ]);
    }
}
