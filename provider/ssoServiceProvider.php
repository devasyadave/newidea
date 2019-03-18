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
        $this->app->make('MiniOrange\Classes\Actions\AuthFacadeController');
        
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
         
         $this->loadRoutesFrom(__DIR__.'/../src/routes.php');
         $this->loadViewsFrom(__DIR__.'/../src/','newidea');
         $this->publishes([
        __DIR__.'/../src/includes/css' => public_path('Miniorange/includes/css'),
    ], 'mo_assets');
         $this->publishes([__DIR__.'/../src/includes/js/plugins' => public_path('Miniorange/includes/js/plugins'),
    ], 'mo_assets');
$this->publishes([__DIR__.'/../src/resources/images' => public_path('Miniorange/resources/images'),
    ], 'mo_assets');
$this->publishes([__DIR__.'/../src/resources' => public_path('Miniorange/resources'),
    ], 'mo_assets');
        //
    }
  
}
