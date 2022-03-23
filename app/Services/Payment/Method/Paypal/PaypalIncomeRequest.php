<?php

namespace App\Services\Payment\Method\Paypal;

use App\Models\PaypalOrder;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use function config;
use function redirect;
use function route;

class PaypalIncomeRequest
{
    public function create($amount, $order_id){

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
                            "value" => $amount
                        ]
                    ]
                ]
            ]);


            if (isset($response['id']) && $response['id'] != null) {


                $paypalOrder =  PaypalOrder::create([
                    'order_id' => $order_id,
                    'paypal_order_id'  => $response['id'],
                    'status'    => $response['status'],

                    'link1'     => $response['links'][0]['href'],
                    'rel1'      => $response['links'][0]['rel'],
                    'method1'   => $response['links'][0]['method'],

                    'link2'     => $response['links'][1]['href'],
                    'rel2'      => $response['links'][1]['rel'],
                    'method2'   => $response['links'][1]['method'],

                    'link3'     => $response['links'][2]['href'],
                    'rel3'      => $response['links'][2]['rel'],
                    'method3'   => $response['links'][2]['method'],

                    'link4'     => $response['links'][3]['href'],
                    'rel4'      => $response['links'][3]['rel'],
                    'method4'   => $response['links'][3]['method'],
                ]);

                // redirect to approve href
                foreach ($response['links'] as $links) {
                    if ($links['rel'] == 'approve') {
//                    return $response;
                        return redirect()->away($links['href']);
                    }
                }

                return redirect()
                    ->route('createTransaction')
                    ->with('error', 'Something went wrong.');

            } else {
                return redirect()
                    ->route('createTransaction')
                    ->with('error', $response['message'] ?? 'Something went wrong.');
            }
        }



    public function coplete(Request $request){
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('createTransaction')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
}
