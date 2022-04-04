<?php

namespace App\Http\Controllers\Api\Poketshop;

use App\Http\Controllers\Controller;
use App\Http\Resources\PocketShopResource;
use App\Models\Poketshop;
use Illuminate\Http\Request;

class PoketshopController extends Controller
{
    public function get(){

        $pocketshop = Poketshop::get();
        return  PocketShopResource::collection($pocketshop);
    }
}
