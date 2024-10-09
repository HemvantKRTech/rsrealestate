<?php

namespace App\Providers;
use App\Models\Property;
use App\Models\Category;
use App\Models\City;
use App\Models\Metatag;
use App\Models\PropertyType;
use Illuminate\Support\Facades\View;
use App\Models\Service;
use App\Models\Setting;
use App\Models\SiteNews;

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
        View::composer('component.search_form', function ($view) {
            $category = Category::where('status',1)->get(); 
            $type = PropertyType::where('status','active')->with('subpropertyType')->get();
            // dd($type);
            $city = City::where('status','active')->get();// Fetch all cities
        
            $view->with([
                'category' => $category,
                'cities' => $city,
                'type' => $type
            ]); 
        });

        View::composer('*', function ($view) { // '*' indicates it's available for all views
           
        
            // Fetch top 10 properties (you can modify the logic based on your needs)
            $hotProperties = Property::with('city', 'sector', 'propertyType', 'category') 
            ->orderBy('created_at', 'desc') // Order by the latest properties
            ->limit(10)
            ->get();
            $sitesetting=Setting::find(1);
            $city = City::all(); 
            $metatags=Metatag::all();
            $newss = SiteNews::where('status','active')->get(); 
        // dd($hotProperties);
            $view->with([
                'city' => $city,
                'hotProperties' => $hotProperties,
                'sitesetting'=>$sitesetting,
                'metatags'=>$metatags,
                'newss'=>$newss
            ]);
        });
       
       
    }
}
