<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DummyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
      //  echo "Boot";;
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
      //  echo "Register";
    }
}
