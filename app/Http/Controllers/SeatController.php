<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeatRequest;
use App\Http\Requests\UpdateSeatRequest;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->authorizeResource(Seat::class);
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
            $seats  = Seat::where('row_number', 'LIKE', "%$keyword%")
                            ->orWhere('seat_number', 'LIKE', "%$keyword%")
                            ->latest()->paginate($perPage);
        } 
        else 
        {
            $seats  = Seat::latest()->paginate($perPage);
        }

        return view('admin.seats.index', compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.seats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreSeatRequest $request)
    {

        $requestData = $request->all();

        Seat::create($requestData);

        return redirect('admin/seats')->with('success', 'Seat added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show(Seat $seat )
    {
        return view('admin.seats.show', compact('seat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(Seat $seat )
    {


        return view('admin.seats.edit', compact('seat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UpdateSeatRequest $request, Seat $seat )
    {

        $requestData = $request->all();

        $seat ->update($requestData);

        return redirect('admin/seats')->with('success', 'Seat updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Seat $seat )
    {
        $seat ->delete();
        return redirect('admin/seats')->with('success', 'Seat deleted!');
    }
}
