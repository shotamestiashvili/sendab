<?php

namespace App\Http\Controllers\Api\Offer;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditOfferRequest;
use App\Http\Requests\OfferBasedStatusRequest;
use App\Http\Requests\OfferBasedUserIdAndStatusRequest;
use App\Http\Requests\OfferBasedUserIdRequest;
use App\Http\Requests\PartniorRequest;
use App\Http\Resources\PartniorResource;
use App\Models\Offer;
use App\Services\Partnior\CreatePartnior;
use App\Services\Partnior\CreatePartniorFacade;
use App\Services\Partnior\EditPartnior;
use App\Services\Partnior\EditPartniorFacade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class OfferController extends Controller
{

    public function createOffer(PartniorRequest $request){

         new CreatePartniorFacade((new CreatePartnior()), $request);
         return Response()->json(['message'=>'created']);
    }


    public function getAllOffers(Request $request){
        $partniors =   Offer::with([
                'partnior.routes',
                'partnior.transports',
                'partnior.parcels',
                'partnior.pickupTypes',
                'partnior.partniorPrices',
                'partnior.reoffers',
                'user.feedbacks',])
            ->get()
            ->map(function($offer){
                return $offer->partnior;
            });

        return  PartniorResource::collection($partniors);
    }

    public function getMyAllOffers(Request $request){
        $partniors =   Offer::where('user_id', Auth::user()->id)
                            ->with(['partnior.routes',
                              'partnior.transports',
                              'partnior.parcels',
                              'partnior.pickupTypes',
                              'partnior.partniorPrices',
                              'partnior.reoffers',
                               'user.feedbacks',])
                          ->get()
                          ->map(function($offer){
                              return $offer->partnior;
                          });

        return  PartniorResource::collection($partniors);
    }

    public function getMyOffersBasedStatus(OfferBasedStatusRequest $request){
        $partniors =   Offer::where('user_id', Auth::user()->id)
            ->where('status', $request->status)
            ->with(['partnior.routes',
                'partnior.transports',
                'partnior.parcels',
                'partnior.pickupTypes',
                'partnior.partniorPrices',
                'partnior.reoffers',
                'user.feedbacks'])
            ->get()
            ->map(function($offer){
                return $offer->partnior;
            });

        return  PartniorResource::collection($partniors);
    }


    public function getOffersByUserId(OfferBasedUserIdRequest $request){
        $partniors =   Offer::where('user_id', $request->user_id)
            ->where('status', 'Passive')
            ->with(['partnior.routes',
                'partnior.transports',
                'partnior.parcels',
                'partnior.pickupTypes',
                'partnior.partniorPrices',
                'partnior.reoffers',
                'user.feedbacks'])
            ->get()
            ->map(function($offer){
                return $offer->partnior;
            });

        return  PartniorResource::collection($partniors);
    }


    public function getOffersByUserIdandStatus(OfferBasedUserIdAndStatusRequest $request){

        $partniors =   Offer::where('user_id', $request->user_id)
            ->where('status', $request->status)
            ->with(['partnior.routes',
                'partnior.transports',
                'partnior.parcels',
                'partnior.pickupTypes',
                'partnior.partniorPrices',
                'partnior.reoffers',
                'user.feedbacks'])
            ->get()
            ->map(function($offer){
                return $offer->partnior;
            });

        return  PartniorResource::collection($partniors);
    }

    public function editMyOffer(EditOfferRequest $request){

        $status = Offer::where('user_id',  Auth::user()->id)
                       ->where('id', 1)
                       ->value('status');

        if($status == 'Active' || $status == 'Passive'){

            $partnior_id = Offer::where('id', $request->offer_id)
                              ->value('partnior_id');

            (new EditPartniorFacade((new EditPartnior()), $request, Auth::user()->id, $partnior_id));

            return Response()->json(['message'=>'updated']);

        }else{
            return Response()->json(['message'=>'status pending']);;
        }
    }

    public function editOfferByUserId(Request $request){

        $status = Offer::where('user_id',  $request->user_id)
            ->where('id', $request->offer_id)
            ->value('status');

        if($status == 'Active' || $status == 'Passive'){

            $partnior_id = Offer::where('id', $request->offer_id)
                ->value('partnior_id');

            (new EditPartniorFacade((new EditPartnior()), $request, $request->user_id, $partnior_id));

            return Response()->json(['message'=>'updated']);;
        }else{
            return Response()->json(['message'=>'status pending']);;
        }

    }



}
