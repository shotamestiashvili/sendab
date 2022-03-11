<?php

namespace App\Traits;
use GuzzleHttp\Client;


trait PaypalAuthentication
{
    protected function  authentication($method, $url, $formParams=[] ){

//        $credentials = 'Basic '."$this->clientId".":"."$this->clientSecret";
//        $credentials = ['Basic'.base64_encode($this->clientId.':'.$this->clientSecret)];
        $client = new Client([

                'base_uri'       => $this->baseUri,
                'authorization'  => ['Authorization' => $credentials],
                'body'           => ['grant_type' => 'client_credentials'],
                'headers'        => ['Accept' => 'application/json', 'Accept-Language' => 'en_US']


        ]);

        $accessToken = $client->request('POST','/v1/oauth2/token');

        return $accessToken->accesToken;
    }
}
