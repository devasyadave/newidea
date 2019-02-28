<?php

namespace Miniorange;

use Illuminate\Support\ServiceProvider;

class ssoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       
        
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require_once 'autoload.php';
        $this->loadRoutesFrom(__DIR__.'/routes.php');
         $this->publishes([
        __DIR__.'/includes/css' => public_path('vendor/courier'),
    ], 'public');
        //
    }
}
