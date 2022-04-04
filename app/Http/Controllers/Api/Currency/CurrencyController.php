<?php

namespace App\Http\Controllers\Api\Currency;

use App\Http\Controllers\Controller;
use App\Http\Resources\CurrencyResource;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function getUsd(){

        $currency = Currency::latest()->get();
        return  CurrencyResource::collection($currency);
    }
}
