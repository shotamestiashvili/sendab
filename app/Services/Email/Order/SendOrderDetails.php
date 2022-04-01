<?php

namespace App\Services\Email\Order;

use App\Models\Customer;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendOrderDetails
{
    protected  $order;
    protected  $pickUp;
    protected  $person;
    protected  $insuarence;
    protected  $term;

    public function send($order, $pickUp, $person, $insuarence, $term){

        $this->order = $order;
        $this->pickUp = $pickUp;
        $this->person = $person;
        $this->insuarence = $insuarence;
        $this->term = $term;

       $array = array([
            'order' => $order,
            'pickup' => $pickUp,
            'person'     => $person,
            'insuarence' => $insuarence,
            'term' => $term
       ]);


        try {
            Mail::send('emails.test', $array, function($message) use ($array){

                view()->share('array', $array);

                $pdf = PDF::loadView('pdf.order', $array);

                $message->to('shotamestiashvili@gmail.com')->subject('My Email');
                $message->from('no_reply@sendab.com','The Sender');

                  $message->attachData($pdf->output(), 'order.pdf');
//                $message->attachData($pdf->output(), 'creater.png');
//                $message->attachData($pdf->output(), 'receiver.png');
            });
            Log::info('Email sent successfully to');
        }catch (\Exception $exception){
            Log::warning($exception);
        }
    }
}
