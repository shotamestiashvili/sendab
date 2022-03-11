<?php

namespace App\Http\Controllers\Api\Location;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function store(Request $request){

            $country = Country::select(['country'])->get();

            return CountryResource::collection($country);
    }
}
