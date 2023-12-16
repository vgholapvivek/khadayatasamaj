<?php

namespace App\Http\Controllers;

use App\Models\AdBanner;
use App\Http\Requests\StoreAdBannerRequest;
use App\Http\Requests\UpdateAdBannerRequest;
use Illuminate\Http\Request;
use File;

class AdBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //$this->authorizeResource(AdBanner::class);
        $this->middleware('permission:adBanner-viewAny|adBanner-create|adBanner-edit|adBanner-delete', ['only' => ['index','store']]);
         $this->middleware('permission:adBanner-create', ['only' => ['create','store']]);
         $this->middleware('permission:adBanner-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:adBanner-delete', ['only' => ['destroy']]);
    }   

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $adBanner = AdBanner::where('name', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $adBanner = AdBanner::latest()->paginate($perPage);
        }

       return view('admin.adBanners.index', compact('adBanner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adBanners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdBannerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdBannerRequest $request)
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

        AdBanner::create($requestData);

        return redirect('admin/adBanner')->with('success', 'Ad Banner added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdBanner  $adBanner
     * @return \Illuminate\Http\Response
     */
    public function show(AdBanner $adBanner)
    {
        return view('admin.adBanners.show', compact('adBanner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdBanner  $adBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(AdBanner $adBanner)
    {
        return view('admin.adBanners.edit', compact('adBanner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdBannerRequest  $request
     * @param  \App\Models\AdBanner  $adBanner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdBannerRequest $request, AdBanner $adBanner)
    {
        $requestData = $request->all();
        //$adBanner1 = AdBanner::find($id);

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

        $adBanner->update($requestData);

        return redirect('admin/adBanner')->with('success', 'Ad Banner updated!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdBanner  $adBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdBanner $adBanner)
    {
        $adBanner->delete();
        return redirect('admin/adBanner')->with('success', 'Ad Banner deleted!');
    }
}
