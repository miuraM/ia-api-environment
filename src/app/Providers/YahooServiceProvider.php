<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use OpenAPI\Client\Configuration;

class YahooServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Configuration::class, function () {
            $api_config = parse_ini_file(config('app.yahoo_config_path'));
            return (new Configuration())
                ->getDefaultConfiguration()
                ->setAccessToken($api_config['accessToken']);
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
