<?php

namespace App\Services\Currency;

use App\Models\Currency;
use App\Models\CurrencyType;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class Currencyfetcher
{
    public function __construct(){
        $client = new Client([

            'base_uri' => 'https://nbg.gov.ge/gw/api/ct/monetarypolicy/currencies/ka/json',

            'timeout'  => 2.0,
        ]);
        $response =  $client->request('GET')->getBody()->getContents();
        $currency = ( json_decode($response, true));
        $usd = ($currency[0]['currencies'][40]['rate']);
        $eur = ($currency[0]['currencies'][13]['rate']);



        try {
            $this->creator($usd, $eur);
        }catch (\Exception $e){
            Log::warning($e);
        }
    }

    public function creator($usd, $eur){
        Currency::create([
            'usd' => $usd,
            'eur' => $eur,
        ]);
    }

    public function getTypes(){
        return CurrencyType::get();
    }
}
