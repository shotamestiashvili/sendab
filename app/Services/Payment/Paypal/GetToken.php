<?php

namespace App\Services\Payment\Paypal;

use GuzzleHttp\Client;

class GetToken
{
    protected $baseUri;
    protected $clientId;
    protected $clientSecret;

    public function __construct(){
        $this->baseUri = config('services.paypal.base_uri');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');
        return $this->getToken();
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

}
