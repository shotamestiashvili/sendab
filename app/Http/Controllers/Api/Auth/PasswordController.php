<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Resources\MessageResponse;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PasswordController extends Controller
{
    public function changePassword(ChangePasswordRequest $request){

        if($request->newPassword !==  $request->repeatPassword){

            $message = 'password does not meet';
            return (new MessageResponse($message));

        }elseif(Auth::check()){
            User::where('id', Auth::user()->id)->update([
                'password' =>  Hash::make($request->newPassword),
            ]);

            $message = 'success';
            return (new MessageResponse($message));

        }else{
            $message = 'error';
            return (new MessageResponse($message));
        }
    }

    public function ressetPassword(ResetPasswordRequest $request){

        $rand =  random_int(100000000000, 1000000000000);
        $resetedPassword = Hash::make($rand);

        if(User::where('email', $request->email)->exists()){

            $changed = User::where('email', $request->email)->update([
                'password' => $resetedPassword
            ]);

        }else{
            $message = 'email not exists';
            return new MessageResponse($message);
        }

        if ($changed){
            Mail::to($request->email)->send(new \App\Mail\PasswordReset($rand));
            $message = 'email sent successfully';
            return new MessageResponse($message);
        }else{
            $message = 'error';
            return new MessageResponse($message);
        }
    }
}
