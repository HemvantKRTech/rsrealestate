<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('FrontendPages.Home');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('adminlogin', [LoginController::class, 'login'])->name('adminlogin');
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dasboard', [AdminController::class, 'index'])->name('dashboard');
        Route::get('service', [ServiceController::class, 'index'])->name('addservice');
        Route::post('addservice', [ServiceController::class, 'create'])->name('services.store');
        Route::get('/allservices', [ServiceController::class, 'allservice'])->name('allservice');
        Route::get('editservices/{id}', [ServiceController::class,'edit'])->name('services.edit');
        Route::delete('/deleteservice/{id}', [ServiceController::class, 'deleteservice'])->name('services.destroy');
        Route::put('/updateservice/{id}', [ServiceController::class, 'updateservice'])->name('services.update');
        Route::get('/cities/create', [AdminController::class, 'createcity'])->name('cities.create');
        Route::post('/cities/store', [AdminController::class, 'storecity'])->name('cities.store');
        Route::get('/cities', [AdminController::class, 'allcity'])->name('cities.all');
        Route::delete('/deletecity/{id}', [AdminController::class, 'deletecity'])->name('city.destroy');
        Route::get('/editcity/{id}', [AdminController::class, 'editcity'])->name('city.edit');
        Route::put('/updatecity/{id}', [AdminController::class, 'updatecity'])->name('cities.update');
        Route::get('/sector', [AdminController::class, 'sectorform'])->name('sectore.form');
        Route::post('/sectorestore', [AdminController::class, 'sectorstore'])->name('sector.store');
        Route::get('/allsector', [AdminController::class, 'sectorall'])->name('sector.all');
        Route::delete('/deletesector/{id}', [AdminController::class, 'destroysector'])->name('sector.destroy');
        Route::get('/editsector/{id}', [AdminController::class, 'editsector'])->name('sector.edit');
        Route::put('sector/{id}', [AdminController::class, 'updatesector'])->name('sector.update');
        Route::get('propertytype/create', [AdminController::class, 'propertytypecreate'])->name('propertytype.create');
        Route::post('propertytype', [AdminController::class, 'propertystore'])->name('propertytype.store');
        Route::get('allpropertytype', [AdminController::class, 'allpropertytype'])->name('propertytype.all');
        Route::delete('/destroyproperty/{id}', [AdminController::class, 'destroyproperty'])->name('property.destroy');
        Route::get('propertytype/{id}/edit', [AdminController::class, 'propertyedit'])->name('propertytype.edit');
        Route::put('propertytype/{id}', [AdminController::class, 'propertyupdate'])->name('propertytype.update');
        Route::get('newpropertylist', [AdminController::class, 'newpropertylist'])->name('newproperty.create');

        
    });
});

require __DIR__ .'/fontend.php';