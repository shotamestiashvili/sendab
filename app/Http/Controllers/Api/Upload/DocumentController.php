<?php

namespace App\Http\Controllers\Api\Upload;

use App\Http\Controllers\Controller;
use App\Http\Resources\DocumentResponces;
use App\Models\Document;
use App\Services\Avatar\SaveDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
   public function save(Request $request){

       $request->validate([
           'front' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048',
           'back' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048',
           'selfie' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048',
       ]);

       $responce = ( new \App\Services\Document\SaveDocument())->createOrUpdate($request);
       return (new DocumentResponces($responce));
   }

   public function getDocumentFront(){
       if(Document::where('user_id', Auth::user()->id)->exists()){

           $documentFront  = Document::where('user_id', Auth::user()->id)
                                     ->value('front');
           return base64_encode(Storage::get($documentFront));
       }else{
           return Response()->json(['message'=>'No Document']);
       }
   }

    public function getDocumentBack(){
        if(Document::where('user_id', Auth::user()->id)->exists()){
            $documentBack  = Document::where('user_id', Auth::user()->id)
                                     ->value('back');
            return base64_encode(Storage::get($documentBack));
        }else{
            return Response()->json(['message'=>'No Document']);
        }
    }

    public function getDocumentSelfie(){
        if( Document::where('user_id', Auth::user()->id)->exists()){
            $documentSelfie  = Document::where('user_id', Auth::user()->id)
                                       ->value('selfie');
            return base64_encode(Storage::get($documentSelfie));
        }else{
            return Response()->json(['message'=>'No Document']);
        }
    }
}
