<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Member;
use App\Models\Suggestion;
use App\Models\Feedback;
use App\Models\Update;
use App\Models\Connection;
use App\Models\Achivementbymember;
use App\Models\Job;
use App\Models\Requirement;
use App\Models\Matrimonial;

class MemberController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('member');      
    }

    public function dashboard()
    {
        $updates          = Update::whereDate('date','>',date('Y-m-d'))->where('status',1)->orderBy('id','ASC')->take(3)->get();
        $connections      = Connection::where('status','!=',2)->where('sender_id',@Auth::guard('member')->user()->id )->orWhere('receiver_id',@Auth::guard('member')->user()->id)->with(['sender', 'receiver'])->orderBy('id','DESC')->take(3)->get();
        $guestConnections = Connection::where('status',2)->where('sender_id',@Auth::guard('member')->user()->id )->orWhere('receiver_id',@Auth::guard('member')->user()->id)->with(['sender', 'receiver'])->orderBy('id','DESC')->take(3)->get();
        return view('frontend.member.dashboard',compact('updates','connections','guestConnections'));
    }

    public function profile()
    {
        return view('frontend.member.profile');
    }

    public function messageBoard()
    {
        $freeAchievement = Achivementbymember::where('created_by',@Auth::guard('member')->user()->id)->where('ad_type',0)->orderBy('id','DESC')->first();
        $paidAchievement = Achivementbymember::where('created_by',@Auth::guard('member')->user()->id)->where('ad_type',1)->orderBy('id','DESC')->first();

        $freeJob         = Job::where('created_by',@Auth::guard('member')->user()->id)->where('ad_type',0)->orderBy('id','DESC')->first();
        $paidJob         = Job::where('created_by',@Auth::guard('member')->user()->id)->where('ad_type',1)->orderBy('id','DESC')->first();

        $freeRequirement = Requirement::where('created_by',@Auth::guard('member')->user()->id)->where('ad_type',0)->orderBy('id','DESC')->first();
        $paidRequirement = Requirement::where('created_by',@Auth::guard('member')->user()->id)->where('ad_type',1)->orderBy('id','DESC')->first();

        $freeMatrimonial = Matrimonial::where('created_by',@Auth::guard('member')->user()->id)->where('ad_type',0)->orderBy('id','DESC')->first();
        $paidMatrimonial = Matrimonial::where('created_by',@Auth::guard('member')->user()->id)->where('ad_type',1)->orderBy('id','DESC')->first();

        return view('frontend.member.message-board', compact('paidAchievement','freeAchievement','freeJob','paidJob','freeRequirement','paidRequirement','freeMatrimonial','paidMatrimonial'));
    }

    public function connections()
    {
        return view('frontend.member.connections');
    }

    public function membershipPlan()
    {
        $memberDetails = Member::find(@Auth::guard('member')->user()->id);
        return view('frontend.member.membership-plan',compact('memberDetails'));
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

    public function moms()
    {
        return view('frontend.member.moms');
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

