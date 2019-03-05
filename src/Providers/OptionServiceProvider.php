<?php
namespace BinaryCabin\Options\Providers;

use Illuminate\Support\ServiceProvider;

class OptionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \BinaryCabin\Options\Commands\MakeOption::class,
            ]);
        }
        //
        $this->publishes([
            __DIR__.'/../Configuration/Templates/options.php' => config_path('options.php')
        ], 'config');
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