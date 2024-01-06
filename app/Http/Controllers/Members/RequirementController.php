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
use App\Models\Requirement;
use App\Models\RequirementImage;
use File;

class RequirementController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('member');
    }

    public function getRequirements($ad_type)
    {
        $ad_type = base64_decode($ad_type);
        return view('frontend.member.requirements.index',compact('ad_type'));
    }

    public function submitRequirement(Request $request)
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
            $data['ad_type']       = $request->ad_type_r;

            if($request->banner)
            {
                $file      =  $request->file('banner');
                $path      = 'frontend/images/requirement/';                    
                $file_name = time();
                $data['image'] = '/' .upload_file($file, $path, $file_name);        
            }

            $requirement = Requirement::create($data);

            if($request->images)
            {
                foreach($request->images as $image)
                {
                    $file                        =  $image;
                    $path                        = 'frontend/images/requirement/';                    
                    $file_name                   = time();
                    $imageData['image']          = '/' . upload_file($file, $path, $file_name); 
                    $imageData['requirement_id'] = $requirement->id; 
                    RequirementImage::create($imageData);
                }                  
            }

            return redirect('/member/message-board')->with('success', 'Your Requirement post has been submitted successfully');
        }
        catch(\Exception $e)
        {
            dd($e);
        }    
    }

    public function deleteRequirement(Request $request,$id)
    {
        $images = RequirementImage::where('requirement_id',$id)->get();

        if(isset($images) && $images->isNotEmpty())
        {
            foreach($images as $image)
            {
                if(File::exists(public_path() . $image->image)) 
                {
                    File::delete(public_path() . $image->image);
                }
            }
        }

        RequirementImage::where('requirement_id',$id)->delete();
        
        $requirement = Requirement::find($id);

        if($requirement)
        {
            if(File::exists(public_path() . $requirement->image)) 
            {
                File::delete(public_path() . $requirement->image);
            }        
        }

        $requirement ->delete();
        return redirect('/member/message-board')->with('success', 'Requirement Post Deleted');
    }
}

