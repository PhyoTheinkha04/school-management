<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
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
        Paginator::useBootstrap();
        View::composer('layouts.navbar', function ($view) {
            $locale = app()->getLocale();
            $view->with('locale', $locale);
        });
        View::composer('local', function ($view) {
            $locale = app()->getLocale();
            $view->with('locale', $locale);
        });
        View::composer('online', function ($view) {
            $locale = app()->getLocale();
            $view->with('locale', $locale);
        });
    }
}
