<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoreEventRequest;
// use App\Http\Requests\UpdateEventRequest;
use App\Models\EventBooking;
use Illuminate\Http\Request;

class EventBookingController extends Controller
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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 50;

        if (!empty($keyword)) 
        {
            $events  = EventBooking::latest()->paginate($perPage);
        } 
        else 
        {
            $events  = EventBooking::latest()->paginate($perPage);
        }

        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreEventRequest $request)
    {
        $requestData = $request->all();

        $event = Event::create($requestData);

        if($event)
        {
            $path = 'frontend/images/events/';
            if ($file = $request->file('images')) 
            {
                $file_name = time();
                $eventImageData['image'] = '/' . upload_file($file, $path, $file_name);
            }    

            $eventImageData['event_id'] = $event->id;
            EventImage::create($eventImageData);

            $seats = Seat::where('status',1)->get();
            foreach($seats as $seat)
            {
                $data['event_id'] = $event->id;
                $data['seat_id'] = $seat->id;
                $data['status'] = 1;
                EventBooking::create($data);
            }
        }        

        return redirect('admin/events')->with('success', 'Event added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show(Event $event )
    {
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(Event $event )
    {
        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UpdateEventRequest $request, Event $event )
    {

        $requestData = $request->all();

        $event ->update($requestData);

        $path = 'frontend/images/events/';
        if ($file = $request->file('images')) 
        {
            $file_name = time();
            $eventImageData['image'] = '/' . upload_file($file, $path, $file_name);
        }    

        $eventImageData['event_id'] = $event->id;
        EventImage::create($eventImageData);

        $seats = Seat::where('status',1)->get();
        foreach($seats as $seat)
        {
            $data['event_id'] = $event->id;
            $data['seat_id']  = $seat->id;
            $data1 = [];
            EventBooking::updateOrCreate($data,$data1);
        }    

        return redirect('admin/events')->with('success', 'Event updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Event $event )
    {
        $event ->delete();
        return redirect('admin/events')->with('success', 'Event deleted!');
    }
}
