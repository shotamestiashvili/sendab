<?php

namespace App\Services\Payment\Method\Paypal;

use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalIncomeOperation
{
    public function __construct(){
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => 23,
                    ]
                ]
            ]
        ]);


        return $response;

    }
}
