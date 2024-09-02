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
        Route::post('/deleteservice/{id}', [ServiceController::class, 'deleteservice'])->name('deleteservice');
    });
});

require __DIR__ .'/fontend.php';