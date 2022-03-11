<?php

namespace App\Http\Controllers\Api\Partner;

use App\Http\Controllers\Controller;use App\Http\Resources\PartnerResource;use App\Models\Partner;use Carbon\Carbon;use Illuminate\Http\Request;use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{
    public function becomePartner(Request $request){


        $userId = Auth::user()->id;

       $partner = Partner::create([
           'user_id' => $userId,
           'plateNumer' => $request->stage1['plateNumer'],
           'carModel' => $request->stage1['carModel'],
           'sourceCity' => $request->stage1['sourceCity'][0],
           'sourceTime' => $request->stage1['sourceTime'],
           'sourceDate' => Carbon::createFromDate($request->stage1['sourceDate'])->format('Y-m-d'),
           'destinationDate1' => Carbon::createFromDate($request->stage1['destinationDate1'])->format('Y-m-d'),
           'destinationCity1' => $request->stage1['destinationCity1'][0],
           'destinationTime1' => $request->stage1['destinationTime1'],
           'airplane' => $request->stage1['airplaneChanger'],
           'car' => $request->stage1['carChanger'],
           'minibus' => $request->stage1['minibusChanger'],
           'railway' => $request->stage1['railwayChanger'],
           'anyParcel' => $request->stage2['anyParcel'],
           'laptop' => $request->stage2['laptop'],
           'smartphone' => $request->stage2['smartphone'],
           'clothes' => $request->stage2['clothes'],
           'oneKg' => $request->stage2['oneKg'],
           'twoKg' => $request->stage2['twoKg'],
           'fiveKg' => $request->stage2['fiveKg'],
           'tenKg' => $request->stage2['tenKg'],
           'twentyKg' => $request->stage2['twentyKg'],
           'twentyKgPlus' => $request->stage2['twentyKgPlus'],
           'length' => $request->stage2['length'],
           'width' => $request->stage2['width'],
           'height' => $request->stage2['height'],
           'fromStore' => $request->stage2['fromStore'],
           'byHand' => $request->stage2['byHand'],
           'enteredKgPrice'=> $request->stage3['enteredKgPrice'],
           'enteredOrderPrice'=> $request->stage3['enteredOrderPrice'],
           'clientOffer'=> $request->stage3['clientOffer'],
       ]);


       if($partner){
           return PartnerResource::collection(
               Partner::where('user_id', $userId)->get()
           );
       }else{
           return PartnerResource::collection($partner);
       }
    }


    public function getPartners(Request $request) {
        $partners = Partner::get();

        return PartnerResource::collection($partners);
    }


}
