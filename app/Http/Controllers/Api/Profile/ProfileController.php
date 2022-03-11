<?php

namespace App\Http\Controllers\Api\Profile;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResources;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function userProfile(Request $request)
    {
        $user = Customer::where('user_id', Auth::user()->id)->get();
        return UserResources::collection($user);
    }


    public function userUpdate(Request $request)
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
