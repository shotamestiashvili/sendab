<?php

namespace App\Providers;

use App\Models\CustomerCommunication;
use App\Observers\CustomerCommunicationObserver;
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

         ResetPassword::createUrlUsing(
            function($notifable, $token){
                return "http://sendapp/reset-password/{$token}?email={$notifable->getEmailForPasswordReset()}";
            }
        );
    }
}
