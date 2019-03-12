<?php
namespace provider;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider;

class moEventServiceProvider extends EventServiceProvider {
    
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Rapidweb\Admin\Events\AdminUserLoggedIn' => [
            'Rapidweb\Admin\Events\Handlers\EmailAdminLoggedInConfirmation',
        ],
    ];
    
    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        
        
        parent::boot($events);
        
        
        //
    }
    
    public function register()
    {
        //
    }