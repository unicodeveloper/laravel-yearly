<?php

namespace Busayo\Yearly;

use Illuminate\Support\ServiceProvider;

class YearlyServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the application services
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-yearly', function(){

            return new YearAfterYear;

        });
    }

    /**
     * Get the services provided by the provider
     * @return array
     */
    public function provides()
    {
        return ['laravel-yearly'];
    }
}