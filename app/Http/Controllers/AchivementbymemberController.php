<?php

namespace App\Http\Controllers;

use App\Models\Achivementbymember;
use App\Models\Status;
use App\Http\Requests\StoreAchivementbymemberRequest;
use App\Http\Requests\UpdateAchivementbymemberRequest;
use Illuminate\Http\Request;
use File;

class AchivementbymemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Achivementbymember::class);
    }

    public function index(Request $request)
    {
        //
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $achivementbymember = Achivementbymember::where('name', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $achivementbymember = Achivementbymember::latest()->paginate($perPage);
        }

        return view('admin.achivementbymember.index', compact('achivementbymember'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = '';
        $member_status = Status::whereNotNull('member_status')->pluck('name','id');
        $status = Status::whereNotNull('admin_status')->pluck('name','id');
        return view('admin.achivementbymember.create',compact('member_status','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAchivementbymemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAchivementbymemberRequest $request)
    {
        $requestData = $request->all();
       
        if(!empty($request->image)){
            $folderPath = public_path('frontend/images/achivement/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('frontend/images/achivement/'), $imageName);
            $requestData['image'] = "frontend/images/achivement/".$imageName;
        }
        
        if(!empty($request->mobile_image)){
            $folderPath = public_path('frontend/images/mobile_achivement/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName = $request->mobile_image->getClientOriginalName();
            $request->mobile_image->move(public_path('frontend/images/mobile_achivement/'), $imageName);
            $requestData['mobile_image'] = "frontend/images/mobile_achivement/".$imageName ;
        }

        Achivementbymember::create($requestData);

        return redirect('admin/achivementbymember')->with('success', 'achivement By Member added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achivementbymember  $achivementbymember
     * @return \Illuminate\Http\Response
     */
    public function show(Achivementbymember $achivementbymember)
    {
        
        return view('admin.achivementbymember.show', compact('achivementbymember'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achivementbymember  $achivementbymember
     * @return \Illuminate\Http\Response
     */
    public function edit(Achivementbymember $achivementbymember)
    {
        $status = '';
        $member_status = Status::whereNotNull('member_status')->pluck('name','id');
        $status = Status::whereNotNull('admin_status')->pluck('name','id');
       return view('admin.achivementbymember.edit', compact('achivementbymember','status','member_status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAchivementbymemberRequest  $request
     * @param  \App\Models\Achivementbymember  $achivementbymember
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAchivementbymemberRequest $request, Achivementbymember $achivementbymember)
    {
        $requestData = $request->all();
        
        if(!empty($request->image)){
            $folderPath = public_path('frontend/images/achivement/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('frontend/images/achivement/'), $imageName);
            $requestData['achivement'] = "frontend/images/achivement/".$imageName;
        }

        if(!empty($request->mobile_image)){
            $folderPath = public_path('frontend/images/mobile_achivement/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName = $request->mobile_image->getClientOriginalName();
            $request->mobile_image->move(public_path('frontend/images/mobile_achivement/'), $imageName);
            $requestData['mobile_achivement'] = "frontend/images/mobile_achivement/".$imageName ;
        }

        $achivementbymember->update($requestData);

        return redirect('admin/achivement')->with('success', 'achiventc updated!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achivementbymember  $achivementbymember
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achivementbymember $achivementbymember)
    {
        $achivementbymember->delete();
        return redirect('admin/achivementbymember')->with('success', 'Ad Advertiment by member deleted!');
    }
}
