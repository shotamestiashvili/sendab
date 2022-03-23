<?php

namespace App\Http\Controllers\Api\Partner;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartniorRequest;
use App\Http\Resources\PartniorResource;
use App\Models\Partner;
use App\Models\Partnior;
use App\Services\Partnior\CreatePartnior;
use App\Services\Partnior\CreatePartniorFacade;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartniorController extends Controller
{

    public function becomePartner(PartniorRequest $request){

        new CreatePartniorFacade((new CreatePartnior()), $request);

    }

    public function getMyPartnersOffers(Request $request) {

        $partners = Partnior::with(['routes', 'transports', 'parcels', 'pickupTypes', 'partniorPrices', 'reoffers'])
            ->where('user_id', Auth::user()->id)
            ->get();

        return  PartniorResource::collection($partners);
    }



    public function getPartnersOffersByUserId(Request $request) {

        $partners = Partnior::with(['routes', 'transports', 'parcels', 'pickupTypes', 'partniorPrices', 'reoffers'])
            ->where('user_id', $request->user_id)
            ->get();

        return  PartniorResource::collection($partners);
    }


    public function getAllPartnersOffers() {

        $partners = Partnior::with(['routes', 'transports', 'parcels', 'pickupTypes', 'partniorPrices', 'reoffers'])
            ->get();

           return  PartniorResource::collection($partners);
    }



}
