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
        return view('frontend/dashboard');
    }

    
    public function listIfMemberSearch()
    {
        return view('frontend/list-if-members-search');
    }
}

