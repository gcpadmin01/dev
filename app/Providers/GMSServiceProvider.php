<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\GMS\GMSClient;

class GMSServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\GMS\GMSClient', function ($app)
        {
            $tokenLoyalty = session('LoyaltyToken');
            $tokenUser = session('LoyaltyUser');
            $loyaltyAccount = session('LoyaltyAccount');

            $travelClickUser = env('TRAVELCLICK_GMS_USER_NAME','');
            $travelClickPassword = env('TRAVELCLICK_GMS_USER_PASSWORD','');
            $travelClickTokenUrl = env('TRAVELCLICK_TOKEN_URL',"");
            $travelClickDomain = env('TRAVELCLICK_DOMAIN',"");

            return new GMSClient(
                "RER",
                $travelClickUser,
                $travelClickPassword,
                $tokenLoyalty,
                $tokenUser,
                $travelClickTokenUrl,
                $travelClickDomain,
                'loyalty/v2',
                $loyaltyAccount
            );
        });
    }
}
