<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Members\Auth\LoginController;
use App\Http\Controllers\Members\HomeController;
use App\Http\Controllers\Members\AchievementController;
use App\Http\Controllers\Members\RequirementController;
use App\Http\Controllers\Members\JobController;
use App\Http\Controllers\Members\MatrimonialController;

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

Route::group(['prefix' => 'member'], function () 
{
        Route::get('/login', [LoginController::class, 'login'])->name('login');        
        Route::post('/login', [LoginController::class, 'memberLogin'])->name('memberLogin');
        Route::get('/register', [LoginController::class, 'register'])->name('register');        
        Route::post('/register', [LoginController::class, 'memberRegister'])->name('memberRegister');        
        Route::get('/logout', [LoginController::class, 'memberLogout'])->name('memberLogout');

        Route::group(['middleware' => ['member']], function() {  
                
                Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('dashboard');
                Route::get('/profile', [MemberController::class, 'profile'])->name('profile');
                Route::get('/message-board', [MemberController::class, 'messageBoard'])->name('message_board');

                Route::get('/achievements/{ad_type}', [AchievementController::class, 'getAchievments']);
                Route::post('/submit-achievement', [AchievementController::class, 'submitAchievement']);
                Route::delete('/delete-achievement/{id}', [AchievementController::class, 'deleteAchievement']);

                Route::get('/jobs/{ad_type}', [JobController::class, 'getJobs']);
                Route::post('/submit-job', [JobController::class, 'submitJob']);
                Route::delete('/delete-job/{id}', [JobController::class, 'deleteJob']);

                Route::get('/requirements/{ad_type}', [RequirementController::class, 'getRequirements']);
                Route::post('/submit-requirement', [RequirementController::class, 'submitRequirement']);
                Route::delete('/delete-requirement/{id}', [RequirementController::class, 'deleteRequirement']);

                Route::get('/matrimonials/{ad_type}', [MatrimonialController::class, 'getJobs']);
                Route::post('/submit-matrimonial', [MatrimonialController::class, 'submitJob']);
                Route::delete('/delete-matrimonial/{id}', [MatrimonialController::class, 'deleteJob']);

                Route::get('/connections', [MemberController::class, 'connections'])->name('connections');
                Route::get('/membership-plan', [MemberController::class, 'membershipPlan'])->name('membership_plan');
                Route::get('/banners', [MemberController::class, 'banners'])->name('banners');
                Route::get('/invoices', [MemberController::class, 'invoices'])->name('invoices');
                Route::get('/suggestions', [MemberController::class, 'suggestions'])->name('suggestions');
                Route::post('/submit-suggestion', [MemberController::class, 'submitSuggestion']);
                Route::get('/feedbacks', [MemberController::class, 'feedbacks'])->name('feedbacks');
                Route::post('/submit-feedback', [MemberController::class, 'submitFeedback']);
                Route::get('/list-of-member-search', [MemberController::class, 'listOfMemberSearch'] );
                Route::get('/contact-us', [MemberController::class, 'contactUs'] );
                Route::post('/contact-submit', [MemberController::class, 'contactSubmit'] );
                Route::get('/jobs', [MemberController::class, 'jobs'])->name('jobs');
                Route::get('/requirements', [MemberController::class, 'requirements'])->name('requirements');
                Route::get('/achivements', [MemberController::class, 'achivements'])->name('achivements');
        });
});