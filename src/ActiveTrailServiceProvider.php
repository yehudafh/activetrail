<?php

namespace Yehudafh\ActiveTrail;

use Illuminate\Support\ServiceProvider;

class ActiveTrailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/activetrail.php' => config_path('activetrail.php'),
        ], 'activetrail-config');

        $this->mergeConfigFrom(__DIR__.'/../config/activetrail.php', 'activetrail');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('activetrail', function () {
            return new ActiveTrail(config('activetrail'));
        });
    }
}
