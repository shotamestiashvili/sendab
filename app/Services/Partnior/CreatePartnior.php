<?php

namespace App\Services\Partnior;

use App\Http\Resources\PartnerResource;
use App\Interfaces\CreatePartniorInterface;
use App\Models\Offer;
use App\Models\Parcel;
use App\Models\Partner;
use App\Models\Partnior;
use App\Models\PartniorPrice;
use App\Models\Pickup;
use App\Models\PickupType;
use App\Models\Reoffer;
use App\Models\Transport;
use App\Models\Route;
use Illuminate\Support\Facades\Auth;

class CreatePartnior implements CreatePartniorInterface
{
    public function create($request){

        $userId = Auth::user()->id;

        $partner = Partnior::create([
            'user_id' => Auth::user()->id,
            'status' => 'Active',
            'sendab_offer' => 0,
            ]);


        $route = Route::create([
            'partnior_id' => $partner->id,
            'source'  =>$request->source,
            'route1' => $request->route1,
            'route2' => $request->route2,
            'route3' => $request->route3,
            'route4' => $request->route4,
            'route5' => $request->route5,
            'route6' => $request->route6,
            'destination' => $request->destination,
        ]);


        $transport = Transport::create([
            'partnior_id' => $partner->id,
            'airplane'=>$request->airplane,
            'car'=>$request->car,
            'minibus'=>$request->minibus,
            'railway'=>$request->railway,
            'other'=> $request->other,
        ]);


        $parcel = Parcel::create([
            'partnior_id' => $partner->id,
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


        $pickupType = PickupType::create([
            'partnior_id' => $partner->id,
            'store' =>$request->store,
            'hand '=>$request->hand,
        ]);


        $prices = PartniorPrice::create([
            'partnior_id' => $partner->id,
            'price_kg' =>$request->price_kg,
            'price_sum' =>$request->price_sum,
        ]);


        $reoffer = Reoffer::create([
            'partnior_id' => $partner->id,
            'reoffer'=>$request->reoffer,
        ]);

        $offer = Offer::create([
            'user_id' => $userId,
            'partnior_id' => $partner->id,
            'sendab_offer' => 0,
            'status' => 'Active',
        ]);

        if($partner){
            return Response()->json(['message'=>'created']);
        }else{
            return Response()->json(['message'=>'error']);;
        }
    }
}
