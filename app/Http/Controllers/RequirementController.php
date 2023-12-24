<?php

namespace App\Http\Controllers;

use App\Models\Requirement;
use App\Models\Status;
use App\Http\Requests\StoreRequirementRequest;
use App\Http\Requests\UpdateRequirementRequest;
use Illuminate\Http\Request;
use File;

class RequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Requirement::class);
    }

    public function index(Request $request)
    {
        //
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $requirement = Requirement::where('name', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $requirement = Requirement::latest()->paginate($perPage);
        }

        return view('admin.requirement.index', compact('requirement'));
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
        return view('admin.requirement.create',compact('status','member_status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRequirementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequirementRequest $request)
    {
        $requestData = $request->all();
        
        if(!empty($request->requirement)){
            $folderPath = public_path('frontend/images/requirement/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName = $request->requirement->getClientOriginalName();
            $request->requirement->move(public_path('frontend/images/requirement/'), $imageName);
            $requestData['requirement'] = "frontend/images/requirement/".$imageName;
        }

        if(!empty($request->mobile_requirement)){
            $folderPath = public_path('frontend/images/mobile_requirement/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName = $request->mobile_requirement->getClientOriginalName();
            $request->mobile_requirement->move(public_path('frontend/images/mobile_requirement/'), $imageName);
            $requestData['mobile_requirement'] = "frontend/images/mobile_requirement/".$imageName ;
        }

        Requirement::create($requestData);

        return redirect('admin/requirement')->with('success', 'Requirement added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function show(Requirement $requirement)
    {
        return view('admin.requirement.show', compact('requirement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function edit(Requirement $requirement)
    {
        $status = '';
        $member_status = Status::whereNotNull('member_status')->pluck('name','id');
        $status = Status::whereNotNull('admin_status')->pluck('name','id');
        return view('admin.requirement.edit', compact('requirement','status','member_status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequirementRequest  $request
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequirementRequest $request, Requirement $requirement)
    {
        $requestData = $request->all();
        
        if(!empty($request->requirement)){
            $folderPath = public_path('frontend/images/requirement/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName = $request->requirement->getClientOriginalName();
            $request->requirement->move(public_path('frontend/images/requirement/'), $imageName);
            $requestData['requirement'] = "frontend/images/requirement/".$imageName;
        }

        if(!empty($request->mobile_requirement)){
            $folderPath = public_path('frontend/images/mobile_requirement/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName = $request->requirement->getClientOriginalName();
            $request->requirement->move(public_path('frontend/images/requirement/'), $imageName);
            $requestData['mobile_requirement'] = "frontend/images/requirement/".$imageName ;
        }

        $requirement->update($requestData);

        return redirect('admin/requirement')->with('success', 'Requirement updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requirement $requirement)
    {
        $requirement->delete();
        return redirect('admin/requirement')->with('success', 'Requirement deleted!');
    }
}
