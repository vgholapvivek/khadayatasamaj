<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Status;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Http\Request;
use File;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Job::class);
    }

    public function index(Request $request)
    {
        //
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $job = Job::where('name', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $job = Job::latest()->paginate($perPage);
        }

        return view('admin.job.index', compact('job'));
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
        return view('admin.job.create',compact('status','member_status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobRequest $request)
    {
        $requestData = $request->all();
        // dd($request->all()); 
        if(!empty($request->image)){
            $folderPath = public_path('frontend/images/job/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName =$request->image->getClientOriginalName();
           $request->image->move(public_path('frontend/images/job/'), $imageName);
            $requestData['image'] = "frontend/images/job/".$imageName;
        }

        if(!empty($request->mobile_image)){
            $folderPath = public_path('frontend/images/mobile_job/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName = $request->mobile_image->getClientOriginalName();
            $request->mobile_image->move(public_path('frontend/images/mobile_job/'), $imageName);
            $requestData['mobile_image'] = "frontend/images/mobile_job/".$imageName ;
        }

        Job::create($requestData);

        return redirect('admin/job')->with('success', 'Job added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('admin.job.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $status = '';
        $member_status = Status::whereNotNull('member_status')->pluck('name','id');
        $status = Status::whereNotNull('admin_status')->pluck('name','id');
        return view('admin.job.edit', compact('job','status','member_status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobRequest  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $requestData = $request->all();
        
        if(!empty($request->job)){
            $folderPath = public_path('frontend/images/job/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName =$request->image->getClientOriginalName();
           $request->image->move(public_path('frontend/images/job/'), $imageName);
            $requestData['job'] = "frontend/images/job/".$imageName;
        }

        if(!empty($request->mobile_job)){
            $folderPath = public_path('frontend/images/mobile_job/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName =$request->image->getClientOriginalName();
           $request->image->move(public_path('frontend/images/job/'), $imageName);
            $requestData['mobile_job'] = "frontend/images/job/".$imageName ;
        }

        $job->update($requestData);

        return redirect('admin/job')->with('success', 'job updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('admin/job')->with('success', 'Job deleted!');
    }
}
