<?php

namespace App\Http\Controllers;

use App\Models\AdBanner1;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdBanner1Request;
use App\Http\Requests\UpdateAdBanner1Request;
use Illuminate\Http\Request;

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
            $adBanner1 = AdBanner1::where('name', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $adBanner1 = AdBanner1::latest()->paginate($perPage);
        }

        return view('admin.adBanner1.index', compact('academic_years'));
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
        return view('admin.adBanner1.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdBanner1  $adBanner1
     * @return \Illuminate\Http\Response
     */
    public function edit(AdBanner1 $adBanner1)
    {
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

        $city ->update($requestData);

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
