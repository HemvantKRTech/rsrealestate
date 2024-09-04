<?php

namespace App\Providers;
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
            $services = Service::all(); // Fetch all services from the database
            $view->with('services', $services); // Pass the services data to the view
        });
    }
}
