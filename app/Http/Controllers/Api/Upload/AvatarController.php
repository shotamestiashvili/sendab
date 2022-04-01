<?php

namespace App\Http\Controllers\Api\Upload;

use App\Http\Controllers\Controller;
use App\Http\Resources\AvatarResponces;
use App\Models\AvatarPhoto;
use App\Services\Avatar\SaveAvatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use ParagonIE\ConstantTime\Base64;

class AvatarController extends Controller
{
    public function save(Request $request){
        $request->validate([
            'avatar' => 'required|mimes:jpg,jpeg,png|max:4096'
        ]);
        $responce = ( new SaveAvatar())->createOrUpdate($request);
        return (new AvatarResponces($responce));

    }

    public function getAvatar(Request $request){

        $userId = Auth::user()->id;

        if( AvatarPhoto::where('uploaded_by', $userId)->exists()){
            $avatar_path =  AvatarPhoto::where('uploaded_by', Auth::user()->id)->value('file_url');
            $image =  Storage::get($avatar_path);
            return base64_encode($image);

        }else{
            return Response()->json(['message'=>'No Avatar']);
        }
    }


}
