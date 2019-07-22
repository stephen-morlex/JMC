<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Service;
use App\About;
use App\Team;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $services = Service::get();
            $about = About::get();
            $teams = Team::get();

            //Registering Global variable

            $view->with('services', $services);
            $view->with('about', $about);
            $view->with('teams', $teams);
        });
    }
}