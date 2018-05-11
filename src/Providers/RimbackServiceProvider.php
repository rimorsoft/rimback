<?php

namespace Rimorsoft\Rimback\Providers;

use Illuminate\Support\ServiceProvider;

class RimbackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/rimback.php'); //Route Rimback

        // File config Rimback
        $this->publishes([
            __DIR__.'/../../publishes/config/rimback.php'      => config_path('rimback.php'),
            __DIR__.'/../../publishes/resources/views/rimback' => resource_path('views'),
            __DIR__.'/../../publishes/app/Http/Controllers'    => app_path('Http/Controllers'),
        ]);

        // Views Rimback
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'rimback');

        // Migrations Rimback
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
