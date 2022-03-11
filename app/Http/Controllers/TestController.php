<?php

namespace App\Http\Controllers;

//use GuzzleHttp\Client;

class TestController extends Controller
{
    public function elapost (){

        $client = new \GuzzleHttp\Client();
        $url = "http://localhost:9200/info/_create/1";
        $doc =['user' => 'shotamestiashvili', 'phone ' => 555755353, 'address' => 'Batumi'];

//        return $client->request('post', $url,  [
//            'headers' => ['Content-Type' => 'application/json'],
//            'json' => $doc]);


        $request =   $client->post($url, ['headers' => ['Content-Type' => 'application/json'],  'json' => json_encode($doc)]);

        return $request->getBody();
    }

    public function elaget(){
        $client = new \GuzzleHttp\Client();
        $url = "http://localhost:9200/_alias?pretty";
        $request =  ($client->get($url));

        return $request->getBody();
    }
}
