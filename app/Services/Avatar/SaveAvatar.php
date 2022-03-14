<?php

namespace App\Services\Avatar;

use App\Models\AvatarPhoto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SaveAvatar
{
    public function createOrUpdate($request)
    {
//        $name = $request->file('avatar')->getClientOriginalName();
//        $request->file('avatar')->storeAs('avatar', $name);

        $name = $request->file('avatar')->getClientOriginalName();
        $avatar_photo = new AvatarPhoto();
        $userId = Auth::user()->id;
//        $userId = 1;

        $exists = $avatar_photo->where('uploaded_by', $userId);

        if ($exists->exists()){
            Storage::delete( $exists->value('file_url'));
            $request->file('avatar')->storeAs('avatar', $name);
            $exists->update([
                'uploaded_by' => $userId,
                'file_url'    => '/avatar/'.$name,
            ]);

            return 'updated';
        }else {

            $request->file('avatar')->storeAs('avatar', $name);
            $avatar_photo->uploaded_by = $userId;
            $avatar_photo->file_url    = '/avatar/'.$name;
            $avatar_photo->save();

            return 'created';
        }


    }

}
