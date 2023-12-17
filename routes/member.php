<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Members\Auth\LoginController;
use App\Http\Controllers\Members\HomeController;

Route::get('/clear', function() {

        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('optimize:clear');
});

Route::get('/', [HomeController::class, 'index'] );
Route::get('/about-us', [HomeController::class, 'aboutUs'] );
Route::get('/board-members', [HomeController::class, 'boardMembers'] );
Route::get('/upcoming-events', [HomeController::class, 'upcomingEvents'] );
Route::get('/past-events', [HomeController::class, 'pastEvents'] );
Route::get('/faq', [HomeController::class, 'faq'] );
Route::get('/donation', [HomeController::class, 'donation'] );

Route::group(['prefix' => 'member'], function () 
{
        Route::get('/login', [LoginController::class, 'login'])->name('login');        
        Route::post('/login', [LoginController::class, 'memberLogin'])->name('memberLogin');
        Route::get('/register', [LoginController::class, 'register'])->name('register');        
        Route::post('/register', [LoginController::class, 'memberRegister'])->name('memberRegister');        
        Route::get('/logout', [LoginController::class, 'memberLogout'])->name('memberLogout');

        Route::group(['middleware' => ['member']], function() {     
                Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('dashboard');
                Route::get('/list-if-member-search', [MemberController::class, 'listIfMemberSearch'] );
                Route::get('/contact-us', [MemberController::class, 'contactUs'] );
                Route::post('/contact-submit', [MemberController::class, 'contactSubmit'] );
        });
});