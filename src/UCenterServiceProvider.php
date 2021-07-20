<?php namespace Douxz\UCenter;

use Illuminate\Support\ServiceProvider;

class UCenterServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/ucenter.php' => config_path('ucenter.php'),
        ]);

        $this->mergeConfigFrom(__DIR__.'/config/ucenter.php', 'ucenter');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ucenter', function ($app) {
            return new UCenter;
        });

        $this->app->bind('Douxz\UCenter\Contracts\Api', config('ucenter.service'));
    }
}
