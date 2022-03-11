<?php

namespace App\Services\Payment;

use App\Traits\ConsumesExternalServices;
use App\Traits\PaypalAuthentication;
use GuzzleHttp\Client;

class PaypalService
{
    protected $baseUri;
    protected $clientId;
    protected $clientSecret;

    public function __construct(){
        $this->baseUri = config('services.paypal.base_uri');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');
    }

    public function getToken(){

        $client = new Client([
            'base_uri'       => $this->baseUri,
        ]);

        $response = $client->request('POST','/v1/oauth2/token',
            [
            'headers'        => ['Accept' => 'application/json', 'Accept-Language' => 'en_US'],
            'auth'           => [$this->clientId, $this->clientSecret],
            'form_params'    => ['grant_type' => 'client_credentials'],
        ]);

        $token =  json_decode($response->getBody(), true);
        return ($token['access_token']);
    }

//    public function resolveAuthorization($queryParams, $formParams, $headers){
//        $headers['Authorization'] = $this->resolveAccessToken();
//    }
//
//    public function decodeResponse($responce){
//        return json_decode($responce);
//    }
//
//    public function resolveAccessToken(){
//        $credentials = "$this->clientId".":"."$this->clientSecret";
//        return "Basic {$credentials}";
//    }
//
//    public function createOrder($value, $currency){
//        return $this->makeRequest(
//            'POST',
//            '/v2/checkout/orders',
//            [],
//            [
//                'intent' => 'CAPTURE',
//                'purchase_units'=>[
//                    0=>[
//                        'amount'=> [
//                            'currency_code' => strtoupper($currency),
//                            'value' => $value
//                        ]
//                    ],
//                    'application_context' => [
//                        'brand_name' => config('app.name'),
//                        'shipping_preference' => 'NO_SHIPPING',
//                        'user_action' => 'PAY_NOW',
//                        'return_url' => route('approval'),
//                        'cancel' => route('cancelled'),
//
//                    ]
//                ]
//            ],
//            [],
//            true,
//        );
//    }
}
