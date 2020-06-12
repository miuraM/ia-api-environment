<?php

namespace App\Providers;

use FacebookAds\Api;
use Illuminate\Support\ServiceProvider;

class FacebookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Api::class, function () {
            Api::init(
                config('app.facebook_api.app_id'),
                config('app.facebook_api.app_secret'),
                config('app.facebook_api.app_access_token')
            );
            return API::instance();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
