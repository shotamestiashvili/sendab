<?php

namespace App\Http\Controllers\Api\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Http\Resources\OrderResource;
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
use App\Services\Order\CreateOrder;
use App\Services\Order\CreateOrderFacade;
use App\Services\Payment\Method\Charge\PaymentCharge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function createOrder(OrderRequest $request){

        $order = (new CreateOrderFacade(new CreateOrder(), $request));

        if($order){

            return Response()->json(['message' => 'Order created']);
        }else{
            return Response()->json(['message' => 'Order could not created']);
        }
    }

    public function getOrder(Request $request){

       $orders = Order::with(['user', 'offer', 'pickups', 'people', 'insuarance'])
            ->where('user_id', Auth::user()->id)
            ->where('status', $request->status)
            ->get();

        return OrderResource::collection($orders);
    }
}
