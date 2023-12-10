<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{ 
    public function index()
    {
        return view('frontend/index');
    }

    public function aboutUs()
    {
        return view('frontend/about-us');
    }

    public function boardMembers()
    {
        return view('frontend/board-members');
    }

    public function upcomingEvents()
    {
        return view('frontend/upcoming-events');
    }

    public function pastEvents()
    {
        return view('frontend/past-events');
    }

    public function donation()
    {
        return view('frontend/donation');
    }

    public function faq()
    {
        return view('frontend/faq');
    }
    

    public function contactUs()
    {
        return view('frontend/contact-us');
    }

}

