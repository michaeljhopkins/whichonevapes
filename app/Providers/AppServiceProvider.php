<?php

namespace Vape\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Config;
use Illuminate\Support\ServiceProvider;
use Laracasts\Generators\GeneratorsServiceProvider;
use Lsrur\Inspector\Facade\Inspector;
use Lsrur\Inspector\InspectorServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register(GeneratorsServiceProvider::class);
            $this->app->register(IdeHelperServiceProvider::class);
        }
        if (Config::get('app.debug')) {
            $this->app->register(\PrettyRoutes\ServiceProvider::class);
        }
    }
}
