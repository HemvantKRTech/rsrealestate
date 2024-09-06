<?php

use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    $services=Service::all();
    return view('FrontendPages.Home',compact('services'));
})->name('home');


Route::get('/about-us', function () {
    return view('FrontendPages.about-us');
})->name('about-us');

Route::get('/property_details', function () {
    return view('FrontendPages.property_details');
})->name('property_details');