<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMomRequest;
use App\Http\Requests\UpdateMomRequest;
use App\Models\Mom;
use Illuminate\Http\Request;
use File;

class MomController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Mom::class);
    }


    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $moms  = Mom::where('mom_details', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $moms  = Mom::latest()->paginate($perPage);
        }

        return view('admin.moms.index', compact('moms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.moms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreMomRequest $request)
    {
        $requestData = $request->all();

        if($request->file)
        {
            $file      =  $request->file('file');
            $path      = 'uploads/mom/';                    
            $file_name = time();
            $requestData['file'] = '/' .upload_file($file, $path, $file_name);        
        }      

        Mom::create($requestData);

        return redirect('admin/moms')->with('success', 'Mom added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show(Mom $mom )
    {
        return view('admin.moms.show', compact('mom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(Mom $mom )
    {
        return view('admin.moms.edit', compact('mom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UpdateMomRequest $request, Mom $mom )
    {
        $requestData = $request->all();

        if($request->file)
        {
            if(File::exists(public_path() . $mom->file)) 
            {
                File::delete(public_path() . $mom->file);
            }  

            $file      =  $request->file('file');
            $path      = 'uploads/mom/';                    
            $file_name = time();
            $requestData['file'] = '/' .upload_file($file, $path, $file_name);        
        }    

        $mom ->update($requestData);

        return redirect('admin/moms')->with('success', 'Mom updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Mom $mom )
    {
        if($mom->file)
        {
            if(File::exists(public_path() . $mom->file)) 
            {
                File::delete(public_path() . $mom->file);
            }        
        }
        $mom ->delete();
        return redirect('admin/moms')->with('success', 'Mom deleted!');
    }
}
