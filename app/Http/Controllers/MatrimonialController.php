<?php

namespace App\Http\Controllers;

use App\Models\Matrimonial;
use App\Models\Status;
use App\Http\Requests\StoreMatrimonialRequest;
use App\Http\Requests\UpdateMatrimonialRequest;
use Illuminate\Http\Request;

class MatrimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Matrimonial::class);
    }


    public function index(Request $request)
    {
        //
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $matrimonial = Matrimonial::where('name', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $matrimonial = Matrimonial::latest()->paginate($perPage);
        }

        return view('admin.matrimonial.index', compact('matrimonial'));
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
        return view('admin.matrimonial.create',compact('status','member_status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMatrimonialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMatrimonialRequest $request)
    {
        $requestData = $request->all();
        // dd($request->all()); 
        if(!empty($request->image)){
            $folderPath = public_path('frontend/images/matrimonial/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName =$request->image->getClientOriginalName();
           $request->image->move(public_path('frontend/images/matrimonial/'), $imageName);
            $requestData['image'] = "frontend/images/matrimonial/".$imageName;
        }

        if(!empty($request->mobile_image)){
            $folderPath = public_path('frontend/images/mobile_matrimonial/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName = $request->mobile_image->getClientOriginalName();
            $request->mobile_image->move(public_path('frontend/images/mobile_matrimonial/'), $imageName);
            $requestData['mobile_image'] = "frontend/images/mobile_matrimonial/".$imageName ;
        }

        Matrimonial::create($requestData);

        return redirect('admin/matrimonial')->with('success', 'Matrimonial added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matrimonial  $matrimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Matrimonial $matrimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matrimonial  $matrimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Matrimonial $matrimonial)
    {
        $status = '';
        $member_status = Status::whereNotNull('member_status')->pluck('name','id');
        $status = Status::whereNotNull('admin_status')->pluck('name','id');
        return view('admin.matrimonial.edit', compact('matrimonial','status','member_status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMatrimonialRequest  $request
     * @param  \App\Models\Matrimonial  $matrimonial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMatrimonialRequest $request, Matrimonial $matrimonial)
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
           $request->image->move(public_path('frontend/images/matrimonial/'), $imageName);
            $requestData['mobile_matrimonial'] = "frontend/images/matrimonial/".$imageName ;
        }

        $matrimonial->update($requestData);

        return redirect('admin/matrimonial')->with('success', 'matrimonial updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matrimonial  $matrimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matrimonial $matrimonial)
    {
        $matrimonial->delete();
        return redirect('admin/matrimonial')->with('success', 'Matrimonial deleted!');
    }
}
