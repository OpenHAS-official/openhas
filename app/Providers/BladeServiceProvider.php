<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeServiceProvider extends ServiceProvider
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
        // Blade::directive('title', function ($title) {
        //     $sitename = env('APP_NAME');
        //     $seperator = env('SETTINGS_SEPERATOR', '-');
        //     return e("$title $seperator $sitename");
        // });
    }
}
