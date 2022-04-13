<?php

namespace App\Http\Controllers\Api\Suppport;

use App\Http\Controllers\Controller;use App\Http\Requests\SupportRequest;use App\Http\Resources\SupportResource;use App\Models\Support;use Illuminate\Http\Request;use Illuminate\Support\Facades\Mail;

class SupportController extends Controller
{
    public function save(SupportRequest $request){

       $support = Support::create([
           'subject' => $request->subject,
           'name' => $request->name,
           'email' => $request->email,
           'parcel_code' => $request->parcel_code,
           'comment' => $request->comment,
       ]);

       if($request->language === 'en'){
           Mail::to('askeng@sendab.com')->send(new \App\Mail\Support($support));
       }elseif ($request->language === 'de'){
           Mail::to('askde@sendab.com')->send(new \App\Mail\Support($support));
       }else{
           Mail::to('askge@sendab.com')->send(new \App\Mail\Support($support));
       }


    }
    public function get(Request $request){

        $supports = Support::get();
        return SupportResource::collection($supports);
    }
}
