<?php

namespace App\Providers;

use App\Models\City;
use Illuminate\Support\Facades\View;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('FrontendPages.partials.header', function ($view) {
            $services = Service::all(); 
            $city = City::with('sectors')->get();
            // dd($city);
            $view->with([
                'services' => $services,
                'cities' => $city
            ]); 
        });
    }
}
