<?php

namespace App\Http\Controllers;


use App\Mail\EmailVerification;
use App\Mail\OrderMail;
use App\Services\Payment\Method\Charge\PaymentCharge;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Customer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Request;


class TestController extends Controller
{

    public function charge(Request $request){

        $charge =  new PaymentCharge(101);
        dd ($charge->calculate());
    }

//    public function pdfToEmail(){
//
//        Mail::send('emails.test', (Customer::all())->toArray(), function($message){
//            $datas = (Customer::all())->toArray();
//            view()->share('employee', $datas,);
//            $pdf = PDF::loadView('pdf.customer', $datas);
//            $message->to('shotamestiashvili@gmail.com')->subject('My Email');
//            $message->from('no_reply@sendab.com','The Sender');
//
//            $message->attachData($pdf->output(), 'order.pdf');
//            $message->attachData($pdf->output(), '1.pdf');
//            $message->attachData($pdf->output(), '2.pdf');
//
//        });
//           Log::info('Email sent successfully to');
//    }


    public function qr(){
//        $data = 'this is data';
//        $qrcode = QrCode::size(400)->generate($data);
//        return view('qr',compact('qrcode'));
        return view('qr');
    }

    public function createPDF() {

        $qrcode = QrCode::size(100)->generate('my data');
        $datas = (Customer::all())->toArray();
        view()->share('employee', $datas,);
        $pdf = PDF::loadView('pdf.customer', $datas);


        return $pdf->download('invoice.pdf');
    }


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
