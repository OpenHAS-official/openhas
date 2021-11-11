<?php

namespace App\Providers;

use App\View\Components\CountrySelector;
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
        Blade::component('country-select', CountrySelector::class);
        // Blade::directive('title', function ($title) {
        //     $sitename = env('APP_NAME');
        //     $seperator = env('SETTINGS_SEPERATOR', '-');
        //     return e("$title $seperator $sitename");
        // });
    }
}
