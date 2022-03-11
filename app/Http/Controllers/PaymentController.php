<?php

namespace App\Http\Controllers;

use App\Services\Payment\PaypalService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request){
        $rules = [
            'value' => ['required', 'numeric', 'min:5'],
            'currency' =>  ['required', 'exists:currencies,iso'],
            'payment_platform' =>  ['required', 'exists:payment_platforms,id'],
        ];

        $request->validate($rules);

    }

    public function approval(){

    }
    public function cancelled(){

    }

    public function token(){
        $service = new PaypalService();
        return $service->makeRequest();
    }
}
