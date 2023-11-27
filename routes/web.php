<?php

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


Route::get('/', [CustomerController::class, 'index'] );
Route::get('/about-us', [CustomerController::class, 'aboutUs'] );
Route::get('/board-members', [CustomerController::class, 'boardMembers'] );
Route::get('/upcoming-events', [CustomerController::class, 'upcomingEvents'] );
Route::get('/past-events', [CustomerController::class, 'pastEvents'] );
Route::get('/faq', [CustomerController::class, 'faq'] );
Route::get('/donation', [CustomerController::class, 'donation'] );
Route::get('/contact-us', [CustomerController::class, 'contactUs'] );
Route::post('/contact-submit', [CustomerController::class, 'contactSubmit'] );

Route::get('/login', [CustomerLoginController::class, 'login'])->name('login');        
Route::post('/login', [CustomerLoginController::class, 'customerLogin'])->name('customerLogin');
Route::get('/register', [CustomerLoginController::class, 'register'])->name('register');        
Route::post('/register', [CustomerLoginController::class, 'customerRegister'])->name('customerRegister');        
Route::get('/customerLogout', [CustomerLoginController::class, 'customerLogout'])->name('userLogout');  

//Admin Panel Routes
Route::group(['prefix' => 'admin'], function () 
{    
    Auth::routes();
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
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
    });
});
