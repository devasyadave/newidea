<?php
namespace MiniOrange\Classes\Actions;

use MiniOrange;
use Illuminate\Auth\Events\Logout;

class LogoutListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        include_once __DIR__.'/../../logout.php';
        // Access the order using $event->order...
    }
}