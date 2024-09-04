<?php

use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $services=Service::all();
    return view('FrontendPages.Home',compact('services'));
});