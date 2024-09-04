<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('FrontendPages.Home');
});

Route::get('/about-us', function () {
    return view('FrontendPages.about-us');
})->name('about-us');