<?php

namespace App\Providers;

use App\Models\CustomerCommunication;
use App\Models\Income;
use App\Models\Outcome;
use App\Models\OutcomeRequest;
use App\Models\Partnior;
use App\Models\User;
use App\Observers\CustomerCommunicationObserver;
use App\Observers\IncomeObserver;
use App\Observers\OutcomeObserver;
use App\Observers\OutcomeRequestObserver;
use App\Observers\PartniorObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        CustomerCommunication::observe(CustomerCommunicationObserver::class);
        User::observe(UserObserver::class);

        Income::observe(IncomeObserver::class);
        Outcome::observe(OutcomeObserver::class);
        OutcomeRequest::observe(OutcomeRequestObserver::class);


//         ResetPassword::createUrlUsing(
//            function($notifable, $token){
//                return "http://sendapp/reset-password/{$token}?email={$notifable->getEmailForPasswordReset()}";
//            }
//        );
    }
}
