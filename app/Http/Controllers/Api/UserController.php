<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Resources\MessageResponse;
use App\Http\Resources\UserResources;
use App\Mail\EmailVerification;
use App\Mail\EmailVerified;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;



class UserController extends Controller
{

//    public function register (Request $request) {
//
//        $validator = Validator::make($request->all(), [
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:6|confirmed',
//        ]);
//
//
//        if ($validator->fails())
//        {
//            return response(['errors'=>$validator->errors()->all()], 422);
//        }else{
//
//            $remember_token = Str::random(10);
//
//            $user = User::create([
//                'name' => $request->name,
//                'email' => $request->email,
//                'password' => Hash::make($request['password']),
//                'password_confirmation'=> Hash::make($request['password']),
//                'remember_token' => $remember_token,
//            ]);
//
//            Customer::create([
//                'user_id' => $user->id,
//                'firstname' => $request->name,
//                'lastname' => $request->lastname,
//                'birthdate' => $request->birthdate,
//                'phone'=> $request->phone,
//                'country'=> $request->country,
//                'city'=> $request->city,
//                'address1'=> $request->address1,
//                'address2'=> $request->address2,
//                'postal' => $request->postal,
//                'terms'=> $request->terms,
//                'verified'=> false,
//            ]);
//
//            $token = $user->createToken('Sendab')->accessToken;
//
//            $response = ['token' => $token];
//            \Illuminate\Support\Facades\Mail::to($request->email)->send(new EmailVerification($user->id, $remember_token));
//
//            return response($response, 200);
//
//
//        }
//    }

//    public function login (Request $request) {
//        $validator = Validator::make($request->all(), [
//            'email' => 'required|string|email|max:255',
//            'password' => 'required|string|min:6',
//        ]);
//        if ($validator->fails())
//        {
//            return response(['errors'=>$validator->errors()->all()], 422);
//        }
//
//        if (Auth::check()){
//            $response = ["message" => "User is logged in"];
//            return response($response, 422);
//        }else {
//
//            $user = User::where('email', $request->email)->first();
//            if ($user) {
//                if (Hash::check($request->password, $user->password)) {
//                    Auth::attempt(['email' => $request->email, 'password' => $user->password]);
//                    $token = $user->createToken('Sendab')->plainTextToken;
//                    $response = ['token' => $token];
//                    return response($response, 200);
//                } else {
//                    $response = ["message" => "Password mismatch"];
//                    return response($response, 422);
//                }
//            } else {
//                $response = ["message" =>'User does not exist'];
//                return response($response, 422);
//            }
//        }
//    }


//    public function changePassword(ChangePasswordRequest $request){
//
//        if($request->password['newPassword'] !==  $request->password['repeatPassword']){
//
//            $message = 'password does not meet';
//            return (new MessageResponse($message));
//
//        }elseif(Auth::check()){
//            User::where('id', Auth::user()->id)->update([
//                'password' =>  Hash::make($request->password['newPassword']),
//            ]);
//
//            $message = 'success';
//            return (new MessageResponse($message));
//
//        }else{
//            $message = 'error';
//            return (new MessageResponse($message));
//        }
//    }
//
//    public function ressetPassword(ResetPasswordRequest $request){
//
//      $rand =  random_int(100000000000, 1000000000000);
//      $resetedPassword = Hash::make($rand);
//
//      if(User::where('email', $request->email)->exists()){
//
//          $changed = User::where('email', $request->email)->update([
//              'password' => $resetedPassword
//          ]);
//
//      }else{
//          $message = 'email not exists';
//          return new MessageResponse($message);
//      }
//
//      if ($changed){
//          Mail::to($request->email)->send(new \App\Mail\PasswordReset($rand));
//          $message = 'email sent successfully';
//          return new MessageResponse($message);
//      }else{
//          $message = 'error';
//          return new MessageResponse($message);
//      }
//    }

//    public function verifyEmail($id, $remember_token)
//    {
//
//        $user = (new User())->where('id', $id)
//                            ->where('remember_token', $remember_token);
//        $email = $user->value('email');
//
//        if ($user->exists()){
//            $user = $user->first();
//            $customers = $user->customers->first();
//            $customers->verified = false;
//            $customers->save();
//
//            \Illuminate\Support\Facades\Mail::to($email)->send(new EmailVerified());
//
//            return Redirect()->to('/')->setStatusCode(200, 'verified');
//        }
//    }

    public function verifyAccount()
    {

    }

    public function userdata(Request $request)
    {
        $user = Customer::where('user_id', Auth::user()->id)->get();
        return UserResources::collection($user);
    }


    public function updateuser(Request $request)
    {
        User::where('id',  Auth::user()->id)->update([
            'email' => $request->email,
        ]);

        Customer::where('user_id', Auth::user()->id)->update([
            'firstname' => $request->name,
            'lastname' => $request->lastname,
            'address1'  => $request->address1,
            'birthdate' => $request->birthdate,
        ]);
    }

}
