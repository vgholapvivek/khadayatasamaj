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
use App\Models\AchievementImage;
use File;

class AchievementController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('member');
    }

    public function getAchievments($ad_type)
    {
        $ad_type = base64_decode($ad_type);
        return view('frontend.member.achievements.index',compact('ad_type'));
    }

    public function submitAchievement(Request $request)
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
            $data['ad_type']       = $request->ad_type_a;

            if($request->banner)
            {
                $file      =  $request->file('banner');
                $path      = 'frontend/images/achivement/';                    
                $file_name = time();
                $data['image'] = '/' .upload_file($file, $path, $file_name);        
            }

            $achievement = Achivementbymember::create($data);

            if($request->images)
            {
                foreach($request->images as $image)
                {
                    $file                        =  $image;
                    $path                        = 'frontend/images/achivement/';                    
                    $file_name                   = time();
                    $imageData['image']          = '/' . upload_file($file, $path, $file_name); 
                    $imageData['achievement_id'] = $achievement->id; 
                    AchievementImage::create($imageData);
                }                  
            }

            return redirect('/member/message-board')->with('success', 'Your achievement has been submitted successfully');
        }
        catch(\Exception $e)
        {
            dd($e);
        }    
    }

    public function deleteAchievement(Request $request,$id)
    {
        $images = AchievementImage::where('achievement_id',$id)->get();


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

        AchievementImage::where('achievement_id',$id)->delete();
        
        $achievement = Achivementbymember::find($id);

        if($achievement)
        {
            if(File::exists(public_path() . $achievement->image)) 
            {
                File::delete(public_path() . $achievement->image);
            }        
        }

        $achievement ->delete();
        return redirect('/member/message-board')->with('success', 'Achievement Post Deleted');
    }
}

