<?php
namespace Alakkad\WorldCountriesCities;

use Illuminate\Support\ServiceProvider;

class WorldCountriesCitiesServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/countries.php' => config_path('countries.php'),
            __DIR__ . '/config/cities.php' => config_path('cities.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/migrations/' => database_path('/migrations'),
        ], 'migrations');
    }

    /**
     * Register bindings in the container.
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
