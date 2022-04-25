<?php

namespace App\Http\Controllers\Api\Location;

use App\Http\Controllers\Controller;use App\Http\Resources\CountryResource;use App\Models\Country;use Illuminate\Http\Request;use function request;

class LocationController extends Controller
{

    public function location (Request $request){

        $country = Country::with(['cities'])
                  ->when($request->country != '', function () use ($request){
            return $request->where('country', 'LIKE', '%' . request('search') . '%');
        });

        return (new CountryResource($country));
    }
}
