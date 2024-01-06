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
use App\Models\Matrimonial;
use App\Models\MatrimonialImage;
use File;

class MatrimonialController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('member');
    }

    public function getJobs($ad_type)
    {
        $ad_type = base64_decode($ad_type);
        return view('frontend.member.matrimonials.index',compact('ad_type'));
    }

    public function submitJob(Request $request)
    {
        try
        {
            $data['gender']          = $request->gender;
            $data['first_name']      = $request->first_name;
            $data['middle_name']     = $request->middle_name;
            $data['last_name']       = $request->last_name;
            $data['profile_desc']    = $request->profile_desc;
            $data['interest']        = $request->interest;
            $data['partner_profile'] = $request->partner_profile;
            $data['family_details']  = $request->family_details;
            $data['date']            = $request->date;
            $data['status']          = 0;
            $data['type']            = 'member';
            $data['member_status']   = 0;
            $data['date']            = $request->date;
            $data['created_by']      = @Auth::guard('member')->user()->id;
            $data['ad_type']         = $request->ad_type_m;

            if($request->banner)
            {
                $file      =  $request->file('banner');
                $path      = 'frontend/images/matrimonial/';                    
                $file_name = time();
                $data['image'] = '/' .upload_file($file, $path, $file_name);        
            }

            $matrimonial = Matrimonial::create($data);

            if($request->images)
            {
                foreach($request->images as $image)
                {
                    $file                        =  $image;
                    $path                        = 'frontend/images/matrimonial/';                    
                    $file_name                   = time();
                    $imageData['image']          = '/' . upload_file($file, $path, $file_name); 
                    $imageData['matrimonial_id'] = $matrimonial->id; 
                    MatrimonialImage::create($imageData);
                }                  
            }
            

            return redirect('/member/message-board')->with('success', 'Your Matrimonial posting has been submitted successfully');
        }
        catch(\Exception $e)
        {
            dd($e);
        }    
    }

    public function deleteMatrimonial(Request $request,$id)
    {        
        $matrimonial = Matrimonial::find($id);

        if($matrimonial)
        {
            if(File::exists(public_path() . $matrimonial->image)) 
            {
                File::delete(public_path() . $matrimonial->image);
            }        
        }

        $matrimonial ->delete();
        return redirect('/member/message-board')->with('success', 'Matrimonial Post Deleted');
    }
}

