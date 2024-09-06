<?php

use App\Models\Banner;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $services=Service::all();
    $banners=Banner::where('status','active')->first();
    // dd($banners);
    $images = json_decode($banners->images, true); 
    return view('FrontendPages.Home',compact('services','images'));
})->name('home');


Route::get('/about-us', function () {
    return view('FrontendPages.about-us');
})->name('about-us');

