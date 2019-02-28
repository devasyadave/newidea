<?php



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
        __DIR__.'/includes/css' => public_path('Miniorange/includes/css'),
    ], 'public');
         __DIR__.'/includes/js/plugins' => public_path('Miniorange/includes/js/plugins'),
    ], 'public');
__DIR__.'/resources/images' => public_path('Miniorange/resources/images'),
    ], 'public');
__DIR__.'/resources' => public_path('Miniorange/resources'),
    ], 'public');
        //
    }
}
