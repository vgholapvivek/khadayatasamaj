<?php

namespace App\Http\Controllers\Customers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

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

    public function contactUs()
    {
        return view('frontend/contact-us');
    }
}
