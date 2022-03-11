<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;use App\Mail\EmailVerification;use App\Models\Customer;use App\Models\User;use Illuminate\Http\Request;use Illuminate\Support\Facades\Hash;use Illuminate\Support\Facades\Validator;use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register (Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);


        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }else{

            $remember_token = Str::random(10);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request['password']),
                'password_confirmation'=> Hash::make($request['password']),
                'remember_token' => $remember_token,
            ]);

            Customer::create([
                'user_id' => $user->id,
                'firstname' => $request->name,
                'lastname' => $request->lastname,
                'birthdate' => $request->birthdate,
                'phone'=> $request->phone,
                'country'=> $request->country,
                'city'=> $request->city,
                'address1'=> $request->address1,
                'address2'=> $request->address2,
                'postal' => $request->postal,
                'terms'=> $request->terms,
                'verified'=> false,
            ]);

            $token = $user->createToken('Sendab')->accessToken;

            $response = ['token' => $token];
            \Illuminate\Support\Facades\Mail::to($request->email)->send(new EmailVerification($user->id, $remember_token));

            return response($response, 200);

        }
    }
}
