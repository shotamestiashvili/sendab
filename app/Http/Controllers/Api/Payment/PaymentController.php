<?php

namespace App\Http\Controllers\Api\Payment;

use App\Http\Controllers\Controller;
use App\Services\Income\Income;
use App\Services\Income\IncomeFacade;
use App\Services\Outcome\OutcomeFilter;
use App\Services\Payment\Method\Paypal\PaypalIncomeCreateRequest;
use App\Services\Payment\Method\Paypal\PaypalIncomeCreateFacade;
use App\Services\Payment\Method\Paypal\PaypalIncomeOperation;
use App\Services\Payment\Method\Paypal\PaypalIncomeProcessFacade;
use App\Services\Payment\Method\Paypal\PaypalIncomeProcessRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use function config;
use function redirect;

class PaymentController extends Controller
{

    public function create(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('process'),
                "cancel_url" => route('cancel'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" =>  $request->currency,
                        "value" => $request->value,
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            ( new PaypalIncomeCreateFacade(new PaypalIncomeCreateRequest(), $response));
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            return redirect()->route('createTransaction')->with('error', 'Something went wrong.');
        } else {
            return redirect()->route('createTransaction')->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }


    public function process(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {

            new PaypalIncomeProcessFacade(new PaypalIncomeProcessRequest(), $response);
            new IncomeFacade((new Income()),1, 1, 'paypal', 'completed');

           return Response()->json(['income'=> $response['purchase_units'][0]['payments']['captures'][0]['amount']['value']]);

        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }


    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }

    public function payout(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        $availibility = new OutcomeFilter($request->user()->id, $request->amount);

        if($availibility){
            $batchId = DB::table('outcomes')->latest('id')->first() +1;
            $data = [
                "sender_batch_header" => [
                    "sender_batch_id" => $batchId,
                    "email_subject" => "You have a Payout!"
                ],

                "items" => [
                    [
                        "recipient_type" => "EMAIL",
                        "amount"=>[
                            "value"=> $request->amount,
                            "currency"=>"USD"
                        ],
                        "note"=>"Thanks for your patronage!",
                        "sender_item_id" => "1",
                        "receiver"=>$request->email
                    ],
                ],
            ];

            $provider->createBatchPayout($data);
        }else{
            return Response()->json(['error' => 'not enough balance']);
        }




    }

    public function showPayout($orderId){
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);
        return $provider->showBatchPayoutDetails('73S92479J4648483B');
    }

    public function showOrder($orderId){
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);
        $result =  $provider->showOrderDetails('6LD02933CJ792090J');

        return $result['purchase_units'][0];
    }



}
