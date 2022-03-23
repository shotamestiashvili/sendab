<?php

namespace App\Http\Controllers\Api\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Insuarance;
use App\Models\Order;
use App\Models\Person;
use App\Models\Pickup;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function createOrder(OrderRequest $request){

        try {
            $userId = Auth::user()->id;
            $order  = Order::create([
                'order' => $userId.$request->offer_id,
                'user_id' => $userId,
                'offer_id' => $request->offer_id,
                'amount' => $request->amount,
                'status' => $request->status,
            ]);
            $pickUp = Pickup::create([
                'order_id' => $order->id,
                'pickup_type'=>$request->pickup_type,
                'source_city'=>$request->source_city,
                'source_address1'=>$request->source_address1,
                'source_address2'=>$request->source_address2
            ]);
            $person = Person::create([
                'order_id' => $order->id,
                'firstname'=>$request->firstname,
                'lastname'=>$request->lastname,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'company_name'=>$request->company_name,
                'country'=>$request->country,
                'city'=>$request->city,
                'address1'=>$request->address1,
                'address2'=>$request->address2,
                'postal'=>$request->postal,
                'comment'=>$request->comment,
            ]);
            $insuarence = Insuarance::create([
                'order_id' => $order->id,
                'order_value'=>$request->order_value,
                'content'=> $request->contents,
            ]);
            $term = Term::create([
                'order_id' => $order->id,
                'term'=>$request->term,
            ]);


        }catch (\Exception $e){
            return $e;
        }

    }

    public function getOrder(Request $request){

       $orders = Order::with(['user', 'offer', 'pickups', 'people', 'insuarance'])
            ->where('user_id', 1)
            ->where('status', 1)
            ->get();

        return OrderResource::collection($orders);
    }
}
