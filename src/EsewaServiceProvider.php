<?php

namespace Cixware\Esewa;

use Illuminate\Support\ServiceProvider;

class EsewaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publishes the configuration file
        $this->publishes([
            __DIR__.'/../config/esewa.php' => config_path('esewa.php'),
        ], 'esewa');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register further more services or bindings here
    }
}