<?php

namespace App\Http\Controllers\Members\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct()
    {
       // $this->middleware('member')->except('memberLogout');
    }

    public function login(){
        return view('frontend.auth.login');
    }

    public function register(){
        return view('frontend.auth.register');
    }

    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function memberLogin(Request $request)
    {
        $requestData = $request->all();
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        if(auth()->guard('member')->attempt(array('email' => $requestData['email'], 'password' => $requestData['password'])))
        {
            return response()->json(['status'=>1,'message'=>" Congratulations You Login Successfully !!"]);
        }
        else
        {
            return response()->json(['status'=>0,'message'=>" Please Enter Correct Email And Password"]);
        }
        // return redirect()->intended('/'); 
    }
    
    public function memberLogout(Request $request)
    {
        Auth::guard('member')->logout();
        return redirect('/member/login');
    }

    public function registerThankyou(){
        return view('frontend.auth.registerThankyou');
    }
    
}
