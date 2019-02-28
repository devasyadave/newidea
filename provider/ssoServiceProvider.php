<?php

namespace provider;

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
        //require_once 'autoload.php';
        //$this->loadRoutesFrom(__DIR__.'/../src/routes.php');
         $this->publishes([
        __DIR__.'/../src/includes/css' => public_path('Miniorange/includes/css'),
    ], 'public');
         $this->publishes([__DIR__.'/../src/includes/js/plugins' => public_path('Miniorange/includes/js/plugins'),
    ], 'public');
$this->publishes([__DIR__.'/../src/resources/images' => public_path('Miniorange/resources/images'),
    ], 'public');
$this->publishes([__DIR__.'/../src/resources' => public_path('Miniorange/resources'),
    ], 'public');
        //
    }
}
