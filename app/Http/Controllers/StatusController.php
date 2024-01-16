<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\AdBanner;
use App\Models\Job;
use App\Models\Requirement;
use App\Models\Achivementbymember;
use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;
use Illuminate\Http\Request;

class StatusController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Status::class);
    }
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
            $statuses = Status::where('name', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $statuses = Status::latest()->paginate($perPage);
        }

       return view('admin.statuses.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatusRequest $request)
    {
        $requestData = $request->all();
        Status::create($requestData);

        return redirect('admin/statuses')->with('success', 'Status added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        return view('admin.statuses.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        return view('admin.statuses.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatusRequest  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatusRequest $request, Status $status)
    {
        $requestData = $request->all();

        $status->update($requestData);

        return redirect('admin/statuses')->with('success', 'Status updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        $status->delete();
        return redirect('admin/statuses')->with('success', 'Status deleted!');
    }

    public function approved_reject_status(Request $request){
        $id = $request->id;
        $type = $request->type;
        $page = $request->page;
        $note = $request->note;
       
            $status = Status::where('name',$type)->value('id');
            
            if($page == 'AdBanner'){
                $page = new AdBanner();
            }
            elseif($page == 'Achivementbymember'){
                $page = new Achivementbymember();
            }
            elseif($page == 'Testimonial'){
                $page = new Testimonial();
            }
            elseif($page == 'Job'){
                $page = new Job();
            }
            elseif($page == 'Requirement'){
               $page = new Requirement();
            }
            elseif($page == 'update'){
                $page = new Update();
            }
            else{
               $page = new Matrimonial();
            }

            if(!empty($status))
            {
                
                if(!empty($note))
                {
                  $page::where('id',$id)->update(['member_status'=>$status,'rejected_reason'=>$note]);
                }
                else{
                    
                    $page::where('id',$id)->update(['member_status'=>$status]);
                }  
                  echo 1;
               
            }    
            else{
                echo 0;
            }
    }
}
