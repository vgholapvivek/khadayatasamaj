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
use App\Models\Job;
use File;

class JobController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('member');
    }

    public function getJobs($ad_type)
    {
        $ad_type = base64_decode($ad_type);
        return view('frontend.member.jobs.index',compact('ad_type'));
    }

    public function submitJob(Request $request)
    {
        try
        {
            $data['title']         = $request->title;
            $data['description']   = $request->description;
            $data['status']        = 0;
            $data['type']          = 'member';
            $data['member_status'] = 0;
            $data['date']          = $request->date;
            $data['created_by']    = @Auth::guard('member')->user()->id;
            $data['ad_type']       = $request->ad_type_j;

            if($request->banner)
            {
                $file      =  $request->file('banner');
                $path      = 'frontend/images/job/';                    
                $file_name = time();
                $data['image'] = '/' .upload_file($file, $path, $file_name);        
            }

            Job::create($data);

            return redirect('/member/message-board')->with('success', 'Your Job posting has been submitted successfully');
        }
        catch(\Exception $e)
        {
            dd($e);
        }    
    }

    public function deleteJob(Request $request,$id)
    {        
        $job = Job::find($id);

        if($job)
        {
            if(File::exists(public_path() . $job->image)) 
            {
                File::delete(public_path() . $job->image);
            }        
        }

        $job ->delete();
        return redirect('/member/message-board')->with('success', 'Job Post Deleted');
    }
}

