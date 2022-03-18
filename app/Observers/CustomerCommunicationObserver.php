<?php

namespace App\Observers;

use App\Mail\CustomerCommunicationMail;
use App\Models\CustomerCommunication;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CustomerCommunicationObserver
{
    public function created(CustomerCommunication $customerCommunication){
        Log::info('Email Sent with'.$customerCommunication);
        Mail::to($customerCommunication->email)->send(new CustomerCommunicationMail($customerCommunication));
    }
}
