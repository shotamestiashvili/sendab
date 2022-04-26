<?php

namespace App\Services\Outcome;


use Srmklive\PayPal\Services\PayPal as PayPalClient;

class Payout
{
    public function __construct ()
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

//        $availibility =( new OutcomeFilter($request->user()->id, $request->amount));
        $availibility = true;

        if($availibility){
//            $batchId = DB::table('outcomes')->orderBy('id','desc')->first();;
//            Log::info($batchId->id);
            $data = [
                "sender_batch_header" => [
                    "sender_batch_id" => 34,
                    "email_subject" => "You have a Payout!"
                ],

                "items" => [
                    [
                        "recipient_type" => "EMAIL",
                        "amount"=>[
                            "value"=> 55,
                            "currency"=>"USD"
                        ],
                        "note"=>"Thanks for your patronage!",
                        "sender_item_id" => 34,
                        "receiver"=> 'sb-6u9ab14283851@personal.example.com'
                    ],
                ],
            ];

            $provider->createBatchPayout($data);

            (new OutcomeFacade(new Outcome(), 1, 55, 'paypal', 'completed'));

        }else{
            return Response()->json(['error' => 'not enough balance']);
        }

    }

}
