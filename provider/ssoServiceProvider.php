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
}
