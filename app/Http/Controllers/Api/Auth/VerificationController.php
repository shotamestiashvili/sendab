<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Mail\EmailVerified;
use App\Models\User;
use Carbon\Carbon;

class VerificationController extends Controller
{
    public function verifyEmail($id, $remember_token)
    {

        $user = (new User())->where('id', $id)
            ->where('remember_token', $remember_token);
        $email = $user->value('email');

        if ($user->exists()){
            $user = $user->first();
            $user->email_verification = true;
            $user->email_verified_at = Carbon::now()->diffForHumans();
            $user->save();

            if($user->where('email_verification', false)->exists()){
                \Illuminate\Support\Facades\Mail::to($email)->send(new EmailVerified());
            }

            return Redirect()->to('/')->setStatusCode(200, 'verified');
        }
    }
}
