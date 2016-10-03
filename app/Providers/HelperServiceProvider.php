<?php
namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class HelperServiceProvider extends ServiceProvider{
/*
  function helper(){
  $this->app->bind('Helpers', function()
{
    return new \App\Helpers\Helpers;
});
  }
 */ 
  public function register()
{
    foreach (glob(app_path().'/Helpers/*.php') as $filename){
        require_once($filename);
    }
}
}

?>