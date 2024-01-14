<?php

require __DIR__ . '/member.php';

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as AdminHomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AdBannerController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\AchivementbymemberController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\EventBookingController;
use App\Http\Controllers\MomController;
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
Route::get('/contact-us', [HomeController::class, 'contactUs'] );
Route::post('/submit-contact', [HomeController::class, 'submitContact'] );

Route::group(['prefix' => 'admin'], function () 
{    
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('login', [LoginController::class, 'showLoginForm']);        
    Route::post('login', [LoginController::class, 'login'])->name('admin/login');
    
    Route::group(['middleware' => ['auth']], function() 
    {        
        Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
        Route::resource('users', UserController::class);
        Route::resource('member', MemberController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('posts', PostController::class);
        Route::post('settings/update_records', [SettingController::class, 'update_records'])->name('update_records');
        Route::resource('settings', SettingController::class);
        Route::resource('cities', CityController::class);
        Route::resource('adBanner', AdBannerController::class);
        Route::resource('statuses', StatusController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('job', JobController::class);
        Route::resource('requirement', RequirementController::class);
        Route::resource('achivementbymember', AchivementbymemberController::class);
        Route::post('approved_reject_status', [StatusController::class, 'approved_reject_status'])->name('approved_reject_status');
        Route::resource('blog', BlogController::class);
        Route::resource('update', UpdateController::class);
        Route::resource('seats', SeatController::class);
        Route::resource('events', EventController::class);
        Route::resource('event-bookings', EventBookingController::class);
        Route::resource('moms', MomController::class);
    });
});
