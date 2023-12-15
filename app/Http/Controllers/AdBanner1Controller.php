<?php

namespace App\Http\Controllers;

use App\Models\AdBanner1;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdBanner1Request;
use App\Http\Requests\UpdateAdBanner1Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AdBanner1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(AdBanner1::class);
    }        

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $adbanner1 = AdBanner1::where('name', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $adbanner1 = AdBanner1::latest()->paginate($perPage);
        }

        return view('admin.adBanner1.index', compact('adbanner1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adBanner1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdBanner1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdBanner1Request $request)
    {
        $requestData = $request->all();
        
        if(!empty($request->banner)){
            $folderPath = public_path('frontend/images/banner/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName = $request->banner->getClientOriginalName();
            $request->banner->move(public_path('frontend/images/banner/'), $imageName);
            $requestData['banner'] = "frontend/images/banner/".$imageName;
        }

        if(!empty($request->mobile_banner)){
            $folderPath = public_path('frontend/images/mobile_banner/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName = $request->mobile_banner->getClientOriginalName();
            $request->mobile_banner->move(public_path('frontend/images/mobile_banner/'), $imageName);
            $requestData['mobile_banner'] = "frontend/images/mobile_banner/".$imageName ;
        }

        AdBanner1::create($requestData);

        return redirect('admin/adBanner1')->with('success', 'Ad Banner 1 added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdBanner1  $adBanner1
     * @return \Illuminate\Http\Response
     */
    public function show(AdBanner1 $adBanner1)
    {
        return view('admin.adBanner1.show', compact('adBanner1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdBanner1  $adBanner1
     * @return \Illuminate\Http\Response
     */
    public function edit(AdBanner1 $adBanner1)
    {
         dd($adBanner1);
 
        return view('admin.adBanner1.edit', compact('adBanner1'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdBanner1Request  $request
     * @param  \App\Models\AdBanner1  $adBanner1
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdBanner1Request $request, AdBanner1 $adBanner1)
    {
        $requestData = $request->all();
        $adBanner1 = AdBanner1::find($id);

        if(!empty($request->banner)){
            $folderPath = public_path('frontend/images/banner/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName = $request->banner->getClientOriginalName();
            $request->banner->move(public_path('frontend/images/banner/'), $imageName);
            $requestData['banner'] = "frontend/images/banner/".$imageName;
        }

        if(!empty($request->mobile_banner)){
            $folderPath = public_path('frontend/images/mobile_banner/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName = $request->mobile_banner->getClientOriginalName();
            $request->mobile_banner->move(public_path('frontend/images/mobile_banner/'), $imageName);
            $requestData['mobile_banner'] = "frontend/images/mobile_banner/".$imageName ;
        }

        $adBanner1->update($requestData);

        return redirect('admin/adBanner1')->with('success', 'Ad Banner1 updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdBanner1  $adBanner1
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdBanner1 $adBanner1)
    {
        $adBanner1 ->delete();
        return redirect('admin/adBanner1')->with('success', 'Ad Banner1 deleted!');
    }
}
