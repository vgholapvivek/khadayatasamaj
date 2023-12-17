<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Members;

class MemberController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('member');
    }

    public function dashboard()
    {
        return view('frontend.member.dashboard');
    }

    public function profile()
    {
        return view('frontend.member.profile');
    }

    public function messageBoard()
    {
        return view('frontend.member.message-board');
    }

    public function membershipPlan()
    {
        return view('frontend.member.connections');
    }

    public function banners()
    {
        return view('frontend.member.banners');
    }

    public function invoices()
    {
        return view('frontend.member.invoices');
    }

    public function suggestions()
    {
        return view('frontend.member.suggestions');
    }

    public function feedbacks()
    {
        return view('frontend.member.feedbacks');
    }
    
    public function listOfMemberSearch()
    {
        return view('frontend.member.list-of-members-search');
    }

    public function jobs()
    {
        return view('frontend.member.jobs');
    }

    public function requirements()
    {
        return view('frontend.member.requirements');
    }

    public function achivements()
    {
        return view('frontend.member.achivements');
    }
}

