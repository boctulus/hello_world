<?php

namespace boctulus\hello_world;

use simplerest\core\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        dd("Initing Greeting service");
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        dd("Registering " . __CLASS__);
    }    
}
