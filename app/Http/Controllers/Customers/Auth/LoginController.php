<?php

namespace App\Http\Controllers\Customers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |

    */

    // use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web')->except('userLogout');
    }

    public function login(){
        return view('frontend.auth.login');
    }

    public function register(){
        return view('frontend.auth.register');
    }

    public function customerRegister(Request $request)
    {
        $customer = Customer::create([
            'name' => $request->name,
            'last_name'=>$request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
       
        Auth::guard('web')->loginUsingId($customer->id);

        // return redirect()->intended('/');
        // return redirect()->back();
        return response()->json(['status'=>1,'message'=>$customer->name."  Register Successfully !!"]);
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function customerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) 
        {
            return response()->json(['status'=>1,'message'=>" Congratulations You Login Successfully !!"]);
        }
        else
        {
            return response()->json(['status'=>0,'message'=>" Please Enter Correct Email And Password"]);
        }
        // return redirect()->intended('/'); 
    }
    
    public function customerLogout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
    
}
