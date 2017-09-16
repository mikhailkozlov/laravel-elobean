<?php

namespace MikhailKozlov\Elobean;

use Illuminate\Support\ServiceProvider;

class ElobeanServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Add a sugarcrm extension to the original database manager
        $this->app['db']->extend('sugarcrm', function ($config) {

            $api = new v10($config, $config['options']);

            return new Connection($api);
        });

    }
}