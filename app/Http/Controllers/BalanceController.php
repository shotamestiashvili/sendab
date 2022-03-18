<?php

namespace App\Http\Controllers;

use App\Http\Resources\BalanceResource;
use App\Models\Balance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BalanceController extends Controller
{
   public function getBalance(Request $request){
       $balance = Balance::where('user_id', Auth::user()->id)->get();
       return BalanceResource::collection($balance);
   }

   public function setIncome(Request $request){

   }

    public function setOutcome(Request $request){

    }


}
