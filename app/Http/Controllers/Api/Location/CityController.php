<?php

namespace App\Http\Controllers\Api\Location;

use App\Http\Controllers\Controller;use App\Http\Resources\CityResource;use App\Models\City;use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getCities(Request $request){

        $city = City::select(['city'])->get();

        return CityResource::collection($city);
    }
}
