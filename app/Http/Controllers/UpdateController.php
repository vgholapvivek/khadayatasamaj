<?php

namespace App\Http\Controllers;

use App\Models\Update;
use App\Models\UpdateImage;
use App\Models\Status;
use App\Http\Requests\StoreUpdateRequest;
use App\Http\Requests\UpdateUpdateRequest;
use Illuminate\Http\Request;
use File;

class UpdateController extends Controller
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
             $event = Update::where('name', 'LIKE', "%$keyword%")
             ->latest()->paginate($perPage);
         } else {
             $event = Update::latest()->paginate($perPage);
         }
 
         return view('admin.update.index', compact('event'));
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
         return view('admin.update.create',compact('member_status','status'));
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \App\Http\Requests\StoreEventRequest  $request
      * @return \Illuminate\Http\Response
      */
     public function store(StoreEventRequest $request)
     {
         $requestData = $request->except('event_image', 'mobile_event_image');
         $update = Update::create($requestData);
     
         $eventImages = $request->file('event_image');
         $mobileEventImages = $request->file('mobile_event_image');
         $imagePairs = [];
     
         // Assuming the count for both image types is the same
         for ($i = 0; $i < count($eventImages); $i++) {
             $eventImagePath = $this->uploadImage($eventImages[$i], 'event_image');
             $mobileEventImagePath = $this->uploadImage($mobileEventImages[$i], 'mobile_event_image');
     
             $imagePairs[] = [
                 'update_id' => $update->id,
                 'event_image' => $eventImagePath,
                 'mobile_event_image' => $mobileEventImagePath
             ];
         }
     
         // Insert all image pairs related to the update
         $update->updateImages()->createMany($imagePairs);
     
         return redirect('admin/update')->with('success', 'Events added!');
     }
     
     private function uploadImage($image, $type)
     {
         $folderPath = public_path("frontend/images/{$type}/");
     
         if (!File::exists($folderPath)) {
             File::makeDirectory($folderPath, 0777, true, true);
         }
     
         $imageName = $image->getClientOriginalName();
         $image->move($folderPath, $imageName);
     
         return "frontend/images/{$type}/" . $imageName;
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
         return view('admin.update.edit', compact('event','member_status','status'));
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
         $requestData = $request->except('event_image', 'mobile_event_image');
         $event->update($requestData);
     // Code for processing event images
     $eventImages = $request->file('event_image');
     $mobileEventImages = $request->file('mobile_event_image');
     $imagePairs = [];
 
     // Assuming the count for both image types is the same
     for ($i = 0; $i < count($eventImages); $i++) {
         $eventImagePath = $this->uploadImage($eventImages[$i], 'event_image');
         $mobileEventImagePath = $this->uploadImage($mobileEventImages[$i], 'mobile_event_image');
 
         $imagePairs[] = [
             'update_id' => $update->id,
             'event_image' => $eventImagePath,
             'mobile_event_image' => $mobileEventImagePath
         ];
     }
 
     // Insert all image pairs related to the update
         $update->updateImages()->createMany($imagePairs);
        
         
         return redirect('admin/update')->with('success', 'Past Events updated!');
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
         return redirect('admin/update')->with('success', 'Event deleted!');
     }
}     