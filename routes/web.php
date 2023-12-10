<?php

require __DIR__ . '/member.php';
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customers\HomeController as CustomerController;
use App\Http\Controllers\Customers\Auth\LoginController as CustomerLoginController ; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AdBanner1Controller;

Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('admin/login');        
Route::post('admin/login', [LoginController::class, 'loginsubmit']);
Route::get('admin/logout', [LoginController::class, 'logout'])->name('admin/logout');
    
Route::group(['prefix' => 'admin'], function () 
{    
    //Auth::routes();
    Route::group(['middleware' => ['auth']], function() 
    {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('posts', PostController::class);
        Route::post('settings/update_records', [SettingController::class, 'update_records'])->name('update_records');
        Route::resource('settings', SettingController::class);
        Route::resource('cities', CityController::class);
        Route::resource('adBanner1', AdBanner1Controller::class);
    });
});
