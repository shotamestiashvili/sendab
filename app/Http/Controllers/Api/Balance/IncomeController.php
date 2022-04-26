<?php

namespace App\Http\Controllers\Api\Balance;

use App\Http\Controllers\Controller;
use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
   public function income(Request $request){
       Income::where('balance_id', $request->balance_id)
              ->increment('income_amount', $request->amount);
   }
}
