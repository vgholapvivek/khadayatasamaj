<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Enquiry;

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

    public function submitContact(Request $request)
    {   
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['mobile'] = $request->mobile;
        $data['message'] = $request->message;
        Enquiry::create($data);

        return redirect('contact-us')->with('success', 'We have received your request, we will contact you shortly');
    }

}

