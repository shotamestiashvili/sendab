<?php

namespace App\Http\Controllers\Api\Upload;

use App\Http\Controllers\Controller;
use App\Http\Resources\AvatarResponces;
use App\Models\AvatarPhoto;
use App\Services\Avatar\SaveAvatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        $userId = $request->user()->id;
        if( AvatarPhoto::where('uploaded_by', $userId)->exists()){
            $avatar_path =  AvatarPhoto::where('uploaded_by', Auth::user()->id)->value('file_url');
            return Storage::get($avatar_path);
        }
    }


}
