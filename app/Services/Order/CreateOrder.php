<?php

namespace App\Services\Order;

use App\Interfaces\CreateOrderInterface;
use App\Models\Balance;
use App\Models\Insuarance;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Person;
use App\Models\Pickup;
use App\Models\TemporaryPayment;
use App\Models\Term;
use App\Services\Email\Order\SendOrderDetails;
use App\Services\Payment\Method\Charge\PaymentCharge;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateOrder implements CreateOrderInterface
{
    public function create($request)
    {
        try {
            DB::transaction(function () use ($request) {
                $userId = Auth::user()->id;
                $order = Order::create([
                    'order' => $userId . $request->offer_id,
                    'user_id' => $userId,
                    'offer_id' => $request->offer_id,
                    'amount' => $request->amount,
                    'status' => $request->status,
                ]);
                $pickUp = Pickup::create([
                    'order_id' => $order->id,
                    'pickup_type' => $request->pickup_type,
                    'source_city' => $request->source_city,
                    'source_address1' => $request->source_address1,
                    'source_address2' => $request->source_address2,
                    'comment' => $request->comment,
                ]);
                $person = Person::create([
                    'order_id' => $order->id,
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'company_name' => $request->company_name,
                    'country' => $request->country,
                    'city' => $request->city,
                    'address1' => $request->address1,
                    'address2' => $request->address2,
                    'postal' => $request->postal,
                    'comment' => $request->comment,
                ]);
                $insuarence = Insuarance::create([
                    'order_id' => $order->id,
                    'order_value' => $request->order_value,
                    'content' => $request->contents,
                ]);

                $term = Term::create([
                    'order_id' => $order->id,
                    'term' => $request->term,
                ]);

                $fullAmount = $request->order_value + $request->amount;

                $charge = (new PaymentCharge(($fullAmount)));

                $payment_receiver = Offer::where('id', $request->offer_id)->value('user_id');
                $sendabAmount = $charge->calculate() - $fullAmount;

                $payment = Payment::create([
                    'balance_id' => Balance::where('user_id', Auth::user()->id)->value('id'),
                    'order_id' => $order->id,
                    'payment_amount' => $charge->calculate(),
                    'sendab_percentage' => $charge->getPercentage(),
                    'status' => 'unpaid',
                ]);

                //Here should be run job to outcome money at payer

                TemporaryPayment::create([
                    'payment_id' => $payment->id,
                    'payer_id' => $userId,
                    'receiver_id' => $payment_receiver,
                    'full_amount' => $charge->calculate(),
                    'receiver_amount' => $fullAmount,
                    'sendab_amount' => $sendabAmount
                ]);

                DB::commit();

                $send = new SendOrderDetails();

                $send->send($order->toArray(),
                    $pickUp->toArray(),
                    $person->toArray(),
                    $insuarence->toArray(),
                    $term->toArray());
            });


            // Here should be run job to complete after 24 hour

        } catch (\Exception $e) {
            DB::rollback();
            return Response()->json(['message' => 'Order could not created']);
        }
    }
}
