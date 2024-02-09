<?php
namespace Riwash\Khalti;

use Illuminate\Support\ServiceProvider;

class RiwashKhaltiServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/riwashkhalti.php', 'riwashkhalti');

    }
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/riwashkhalti.php' => config_path('riwashkhalti.php'),
        ], 'config');


    }

}

?>
