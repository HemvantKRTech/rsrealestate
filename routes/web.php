<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\EmailController;

// Route::get('/', function () {
//     return view('FrontendPages.Home');
// });
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('adminlogin', [LoginController::class, 'login'])->name('adminlogin');
Route::get('service/{slug}', [ServiceController::class, 'show'])->name('service.show');
Route::post('inquiries', [InquiryController::class, 'store'])->name('inquiries.store');
Route::get('contact-us', [InquiryController::class, 'create'])->name('contact.us');
Route::post('contacts', [InquiryController::class, 'contactstore'])->name('contacts.store');
Route::get('post-property', [PropertyController::class, 'create'])->name('property.create');
Route::get('city/{cityname}', [PropertyController::class, 'show'])->name('city.details');
Route::get('city/sector/{sectorname}', [PropertyController::class, 'sectorshow'])->name('sector.details');
Route::get('propertydetail/{propertyid}', [PropertyController::class, 'propertydetail'])->name('propertydetail');
Route::get('category/{category}',[PropertyController::class,'catproshow'])->name('catproshow');
Route::get('/api/sectors/{cityId}', [PropertyController::class, 'getSectorsByCitys']);
Route::get('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
Route::post('/property-enquiry', [EmailController::class, 'submitEnquiry'])->name('property.enquiry.submit');
Route::post('post-property', [PropertyController::class, 'frontendstore'])->name('frontendproperty.store');
Route::middleware('auth:admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dasboard', [AdminController::class, 'index'])->name('dashboard');
        Route::get('service', [ServiceController::class, 'index'])->name('addservice');
        Route::post('addservice', [ServiceController::class, 'create'])->name('services.store');
        Route::get('/allservices', [ServiceController::class, 'allservice'])->name('allservice');
        Route::get('editservices/{id}', [ServiceController::class, 'edit'])->name('services.edit');
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
        Route::get('/get-sectors-by-city', [PropertyController::class, 'getSectorsByCity'])->name('getSectorsByCity');
        Route::get('allpropertylist', [AdminController::class, 'allpropertylist'])->name('newproperty.all');
        Route::get('/properties/{id}/show', [AdminController::class, 'show'])->name('property.show');
        Route::get('/properties/{id}/edit', [AdminController::class, 'edit'])->name('property.edit');
        Route::put('/properties/{id}', [AdminController::class, 'update'])->name('property.update');
        Route::delete('/properties/{id}', [AdminController::class, 'propertydestroy'])->name('property.destroy');
        Route::get('addnewproject', [AdminController::class, 'addnewproject'])->name('newproject.create');
        Route::get('inquiries', [InquiryController::class, 'index'])->name('admin.inquiries');
        Route::post('post-property', [PropertyController::class, 'store'])->name('property.store');
        Route::get('category', [PropertyController::class, 'categorycreate'])->name('category.create');
        Route::post('post-category', [PropertyController::class, 'categorystore'])->name('categories.store');
        Route::put('category/{category}', [PropertyController::class, 'categoryupdate'])->name('categories.update');
        Route::delete('category/{category}', [PropertyController::class, 'categorydestroy'])->name('categories.destroy');
        Route::get('banners', [AdminController::class, 'bannerindex'])->name('banners.index');
        Route::patch('banners/{id}/status', [AdminController::class, 'updateStatus'])->name('banners.updateStatus');
        Route::post('banners', [AdminController::class, 'store'])->name('banners.store');
        Route::delete('banners/{banner}', [AdminController::class, 'destroy'])->name('banners.destroy');
        Route::get('settings/site-title', [SettingController::class,'index'])->name('site_title');
        Route::post('settings/site-title', [SettingController::class, 'storeSiteTitle'])->name('admin.settings.siteTitle.store');
        Route::get('settings/meta-tags', [SettingController::class,'meta'])->name('meta-tags');
        Route::post('settings/site-meta', [SettingController::class, 'storeSiteMeta'])->name('meta-tags.store');
        

    });
});

require __DIR__ . '/fontend.php';
