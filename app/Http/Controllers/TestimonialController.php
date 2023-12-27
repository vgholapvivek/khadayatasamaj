<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Status;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use Illuminate\Http\Request;
use File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $testimonial = Testimonial::where('name', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $testimonial = Testimonial::latest()->paginate($perPage);
        }

        return view('admin.testimonial.index', compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = '';
        $status = Status::whereNotNull('admin_status')->pluck('name','id');
        return view('admin.testimonial.create',compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestimonialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonialRequest $request)
    {
        $requestData = $request->all();
        
        if(!empty($request->testimonial)){
            $folderPath = public_path('frontend/images/testimonial/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName = $request->testimonial->getClientOriginalName();
            $request->testimonial->move(public_path('frontend/images/testimonial/'), $imageName);
            $requestData['testimonial'] = "frontend/images/testimonial/".$imageName;
        }

        if(!empty($request->mobile_testimonial)){
            $folderPath = public_path('frontend/images/mobile_testimonial/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName = $request->mobile_testimonial->getClientOriginalName();
            $request->mobile_testimonial->move(public_path('frontend/images/mobile_testimonial/'), $imageName);
            $requestData['mobile_testimonial'] = "frontend/images/mobile_testimonial/".$imageName ;
        }
        
        Testimonial::create($requestData);

        return redirect('admin/testimonial')->with('success', 'Testimonial added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        $status = '';
        $status = Status::whereNotNull('admin_status')->pluck('name','id');
        return view('admin.testimonial.edit', compact('testimonial','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestimonialRequest  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $requestData = $request->all();
        
        if(!empty($request->testimonial)){
            $folderPath = public_path('frontend/images/testimonial/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName =$request->testimonial->getClientOriginalName();
           $request->testimonial->move(public_path('frontend/images/testimonial/'), $imageName);
            $requestData['testimonial'] = "frontend/images/testimonial/".$imageName;
        }

        if(!empty($request->mobile_testimonial)){
            $folderPath = public_path('frontend/images/mobile_testimonial/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName =$request->testimonial->getClientOriginalName();
           $request->testimonial->move(public_path('frontend/images/testimonial/'), $imageName);
            $requestData['mobile_testimonial'] = "frontend/images/testimonial/".$imageName ;
        }

        $testimonial->update($requestData);

        return redirect('admin/testimonial')->with('success', 'Testimonial updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect('admin/testimonial')->with('success', 'Testimonial deleted!');
    }
}
