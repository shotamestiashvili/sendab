<?php

namespace App\Services\Document;

use App\Models\AvatarPhoto;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SaveDocument
{
    public function createOrUpdate($request)
    {
        $front  = $request->file('front')->getClientOriginalName();
        $back   = $request->file('back')->getClientOriginalName();
        $selfie = $request->file('selfie')->getClientOriginalName();

        $document = new Document();

        $userId = Auth::user()->id;


        $exists = $document->where('user_id', $userId);


        if ($exists->exists()){

            Storage::delete( $exists->value('front'));
            Storage::delete( $exists->value('back'));
            Storage::delete( $exists->value('selfie'));

            $request->file('front')->storeAs('document', $userId.'-front-'.$front);
            $request->file('back')->storeAs('document', $userId.'-back-'.$back);
            $request->file('selfie')->storeAs('document', $userId.'-selfie-'.$selfie);

            $exists->update([
                'user_id'   => $userId,
                'front'     => '/document/'.$userId.'-front-'.$front,
                'back'      => '/document/'.$userId.'-front-'.$back,
                'selfie'    => '/document/'.$userId.'-front-'.$selfie,
            ]);

            return 'updated';

        }else {

            $request->file('front')->storeAs('document', $userId.'-front-'.$front);
            $request->file('back')->storeAs('document', $userId.'-back-'.$back);
            $request->file('selfie')->storeAs('document', $userId.'-selfie-'.$selfie);

            $document->user_id = $userId;
            $document->front    = '/document/'.$userId.'-front-'.$front;
            $document->back     = '/document/'.$userId.'-back-'.$back;
            $document->selfie   = '/document/'.$userId.'-selfie-'.$selfie;
            $document->save();

            return 'created';
        }
    }

}
