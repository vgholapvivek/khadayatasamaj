<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Members;
use App\Models\Suggestion;
use App\Models\Feedback;

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

    public function submitSuggestion(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'message' => 'required',
        ]);

        $data['type'] = $request->type;
        $data['message'] = $request->message;
        $data['member_id'] = @Auth::guard('member')->user()->id;
        Suggestion::create($data);

        return redirect('/member/suggestions')->with('success', 'Thank you for your suggestion');
    }

    public function feedbacks()
    {
        return view('frontend.member.feedbacks');
    }

    public function submitFeedback(Request $request)
    {
        $this->validate($request, [
            'subject' => 'required',
            'message' => 'required',
            'image' => 'required',
        ]);

        $path = 'frontend/images/feedback/';
        if ($file = $request->file('image')) 
        {
            $file_name = time();
            $data['image'] = '/' . upload_file($file, $path, $file_name);
        }    

        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        $data['member_id'] = @Auth::guard('member')->user()->id;
        Feedback::create($data);

        return redirect('/member/feedbacks')->with('success', 'Thank you for your feedback');
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

