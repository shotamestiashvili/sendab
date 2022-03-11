<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\CheckAuthResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function dd;
use function view;

class AuthController extends Controller
{


    public function ResetPassword($token, Request $request){

        $email = $request->email;
        return view('auth.forgetpassword', compact('token', 'email'));
    }

    public function verification($id, $hash, Request $request){

        dd($id, $hash);
    }

    public function check(Request $request){

        if(Auth::check()){
            return (new CheckAuthResource(1));
        }else{
            return (new CheckAuthResource(0));
        }
    }


}
