<?php

namespace App\Http\Controllers;

use App\Models\Update;
use App\Models\UpdateImage;
use App\Models\Status;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Event::class);
    }   

    public function index(Request $request)
    {
        //
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $event = Update::where('name', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $event = Update::latest()->paginate($perPage);
        }

        return view('admin.event.index', compact('event'));
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
        return view('admin.event.create',compact('member_status','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
        public function store(StoreEventRequest $request)
        {
            $requestData = $request->all();

            $update = Update::create($requestData);
            
            if (!empty($request->hasFile('event_image'))) {
                $folderPath = public_path('frontend/images/event_image/');
        
                if (!File::exists($folderPath)) {
                    File::makeDirectory($folderPath, $mode = 0777, true, true);
                }
        
                $eventImagesData = []; // Initialize an array to store image paths
        
                foreach ($request->file('event_image') as $image) {
                    $imageName = $image->getClientOriginalName();
                    $image->move($folderPath, $imageName);
                    $eventImagesData[] = new UpdateImage([
                        'event_id' => $update->id,
                        'event_image' => "frontend/images/event_image/" . $imageName,
                        'mobile_event_image' => null, // Set to null for mobile_event_image
                    ]);
                }
        
                $update->updateImages()->saveMany($updateImagesData);
            }
        
            // Code for processing mobile_event_image images
            if (!empty($request->mobile_event_image)) {
                $folderPath = public_path('frontend/images/mobile_event_image/');
        
                if (!File::exists($folderPath)) {
                    File::makeDirectory($folderPath, $mode = 0777, true, true);
                }
        
                $mobileEventImagesData = []; // Initialize an array to store image paths
        
                foreach ($request->file('mobile_event_image') as $image) {
                    $imageName = $image->getClientOriginalName();
                    $image->move($folderPath, $imageName);
                    $mobileEventImagesData[] = new UpdateImage([
                        'event_id' => $update->id,
                        'event_image' => null, // Set to null for event_image
                        'mobile_event_image' => "frontend/images/mobile_event_image/" . $imageName,
                    ]);
                }
        
                $update->updateImages()->saveMany(array_merge($eventImagesData, $mobileEventImagesData));            }
                return redirect('admin/event')->with('success', 'Ad Banner added!');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $status = '';
        $member_status = Status::whereNotNull('member_status')->pluck('name','id');
        $status = Status::whereNotNull('admin_status')->pluck('name','id');
        return view('admin.event.edit', compact('event','member_status','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
{
    $requestData = $request->all();

    // Code for processing event images
    if (!empty($request->hasFile('event_image'))) {
        $folderPath = public_path('frontend/images/event_image/');

        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, $mode = 0777, true, true);
        }

        $eventImagesData = []; // Initialize an array to store image paths

        foreach ($request->file('event_image') as $image) {
            $imageName = $image->getClientOriginalName();
            $image->move($folderPath, $imageName);
            $eventImagesData[] = new UpdateImage([
                'event_id' => $update->id,
                'event_image' => "frontend/images/event_image/" . $imageName,
                'mobile_event_image' => null, // Set to null for mobile_event_image
            ]);
        }

        $update->updateImages()->saveMany($updateImagesData);
    }

    // Code for processing mobile_event_image images
    if (!empty($request->mobile_event_image)) {
        $folderPath = public_path('frontend/images/mobile_event_image/');

        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, $mode = 0777, true, true);
        }

        $mobileEventImagesData = []; // Initialize an array to store image paths

        foreach ($request->file('mobile_event_image') as $image) {
            $imageName = $image->getClientOriginalName();
            $image->move($folderPath, $imageName);
            $mobileEventImagesData[] = new UpdateImage([
                'event_id' => $update->id,
                'event_image' => null, // Set to null for event_image
                'mobile_event_image' => "frontend/images/mobile_event_image/" . $imageName,
            ]);
        }
       
    }

    $event->update($requestData);
    $event->updateImages()->saveMany(array_merge($eventImagesData, $mobileEventImagesData));

    return redirect('admin/event')->with('success', 'Events updated!');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('admin/event')->with('success', 'Event deleted!');
    }
}
