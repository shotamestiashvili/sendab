<?php

namespace App\Services\Partnior;

use App\Interfaces\EditPartniorInterface;
use App\Models\Offer;
use App\Models\Parcel;
use App\Models\Partnior;
use App\Models\PartniorPrice;
use App\Models\PickupType;
use App\Models\Reoffer;
use App\Models\Route;
use App\Models\Transport;
use Illuminate\Support\Facades\Auth;

class EditPartnior implements EditPartniorInterface
{
    public function edit($request, $userId, $partnior_id){

        $route = Route::where('partnior_id', $partnior_id)->update([
            'partnior_id' => $partnior_id,
            'source'  =>$request->source,
            'route1' => $request->route1,
            'route2' => $request->route2,
            'route3' => $request->route3,
            'route4' => $request->route4,
            'route5' => $request->route5,
            'route6' => $request->route6,
            'destination' => $request->destination,
        ]);


        $transport = Transport::where('partnior_id',$partnior_id)->update([
            'partnior_id' => $partnior_id,
            'airplane'=>$request->airplane,
            'car'=>$request->car,
            'minibus'=>$request->minibus,
            'railway'=>$request->railway,
            'other'=> $request->other,
        ]);


        $parcel = Parcel::where('partnior_id', $partnior_id)->update([
            'partnior_id' => $partnior_id,
            'item1' =>$request->item1,
            'item2'=> $request->item2,
            'item3'=>$request->item3,
            'item4'=> $request->item4,
            'item5'=> $request->item5,
            'item6'=> $request->item6,
            'item7'=>$request->item7,
            'item8'=> $request->item8,
            'weight' => $request->weight,
            'length'=>$request->length,
            'height'=>$request->height,
            'width'=>$request->width,
        ]);


        $pickupType = PickupType::where('partnior_id', $partnior_id)->update([
            'partnior_id' => $partnior_id,
            'store'       =>$request->store,
            'hand'       => $request->hand,
        ]);


        $prices = PartniorPrice::where('partnior_id', $partnior_id)->update([
            'partnior_id' => $partnior_id,
            'price_kg' =>$request->price_kg,
            'price_sum' =>$request->price_sum,
        ]);


        $reoffer = Reoffer::where('partnior_id', $partnior_id)->update([
            'partnior_id' => $partnior_id,
            'reoffer'=>$request->reoffer,
        ]);

    }
}
