<?php

namespace Bright\Contactform;

use Illuminate\Support\ServiceProvider;

class contactadminmailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        //poblishing in config
        $this->publishes([
            __DIR__."/../config/config.php"=> config_path("bright_config.php"),
        ],'bright-config');

        // using css files
        $this->publishes([
            __DIR__.'/../public/bright' => public_path('bright'),
        ], 'bright-css');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views','contactform');
    }
}
