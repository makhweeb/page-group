<?php

namespace App\Providers;

use App\Settings\GeneralSettings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        Paginator::useBootstrapFive();

        View::composer('*', function ($view) {
            $view->with('siteSettings', resolve(GeneralSettings::class));
        });
    }
}
