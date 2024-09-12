<?php

use App\Models\Banner;
use App\Models\Category;
use App\Models\Property;
use App\Models\Service;
use App\Models\Sector;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $services=Service::all();
    $banners=Banner::where('status','active')->first();
    $images = json_decode($banners->images, true); 
    $saleproperty=Property::where('category_id',5)->get();
    $rentproperty=Property::where('category_id',3)->get();
    $leaseproperty=Property::where('category_id',4)->get();
    $category=Category::where('status','active')->get();
    $salesectors = Sector::withCount('properties')->get();
    // dd($sectors);
    return view('FrontendPages.Home',compact('services','images','saleproperty','rentproperty','leaseproperty','category','salesectors'));
})->name('home');


Route::get('/about-us', function () {
    return view('FrontendPages.about-us');
})->name('about-us');

Route::get('/property_details', function () {
    return view('FrontendPages.property_details');
})->name('property_details');

Route::get('/blog', function () {
    return view('FrontendPages.blog');
})->name('blog');

Route::get('/property-mohali', function () {
    return view('FrontendPages.property-mohali');
})->name('property-mohali');

Route::get('/sector_propertys', function () {
    return view('FrontendPages.sector_property_details');
})->name('sector_propertys');

Route::get('/testimonials', function () {
    return view('FrontendPages.testimonials');
})->name('testimonials');

Route::get('/search-property', function () {
    return view('FrontendPages.search-property');
})->name('search-property');