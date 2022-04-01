<?php

namespace App\Services\Payment\Method\Charge;

use App\Models\Charge;
use App\Models\UserCharge;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Float_;
use phpDocumentor\Reflection\Types\Integer;

class PaymentCharge
{
    protected $amount;
    protected $percentage;

    public function __construct($amount)
    {
        $this->amount = $amount;
        $this->calculate();
    }


    public function calculate(){
        $this->getPercentage();
        $calculated =  $this->amount + (($this->amount*$this->percentage)/100);
        return $calculated;
    }

    public function getPercentage()
    {
        if(UserCharge::where('user_id', Auth::user()->id)->exists()){
            $this->percentage =  Auth::user()->userCharge->charge_user;
            return $this->percentage;
        }else{
            $this->percentage = Charge::latest()->value('charge_default');

            return $this->percentage;
        }
    }
}
