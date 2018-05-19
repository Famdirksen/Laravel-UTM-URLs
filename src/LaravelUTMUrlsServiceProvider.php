<?php

namespace Famdirksen\LaravelUTMUrls;

use Illuminate\Support\ServiceProvider;

class LaravelUTMUrlsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/utm-urls.php' => config_path('utm-urls.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/utm-urls.php', 'utm-urls');
    }
}
