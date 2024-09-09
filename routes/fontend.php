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