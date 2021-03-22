<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        |--------------------------------------------------------------------------
        | Search Engine Optimization (SEO)
        |--------------------------------------------------------------------------
        |
        | This section includes certain Blade directives that can improve
        | the SEO credibility. For example, title directive.
        |
        */
        Blade::directive('title', function ($expression) {
            if ($expression) {
                return "<?php echo e({$expression}) . ' - ' . config('app.name'); ?>";
            }
            return "<?php echo config('app.name'); ?>";
        });
    }
}
