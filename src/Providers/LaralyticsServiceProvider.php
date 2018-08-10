<?php
namespace MadMikeyB\Laralytics\Providers;

use Illuminate\Support\ServiceProvider;

class LaralyticsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Config
        $this->publishes([
            __DIR__.'/../../config/laralytics.php' => config_path('laralytics.php'),
        ], 'config');

        // Migrations
        $this->publishes([
            __DIR__ . '/../../database/migrations' => database_path('migrations')
        ], 'migrations');

        // Views
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views')
        ], 'views');

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'laralytics');

        // Routes
        $this->loadRoutesFrom(__DIR__ . '/../../routes/laralytics.php');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Alias
        // $this->app->bind('laralytics', function () {
        //     return new MadMikeyB\Laralytics\Facades\Laralytics;
        // });
    }
}
