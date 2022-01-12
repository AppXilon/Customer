<?php

namespace App\Http\Controllers;

use App\Models\BusinessHour;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BusinessHourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $businesshour = BusinessHour::all();
        return view('layouts.businesshour', ['businesshour' => $businesshour]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessHour $businesshour)
    {
        //
        return view('layouts.editHour',compact('businesshour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessHour $businesshour)
    {
        //
        $request->Start_Time = Carbon::parse($request->Start_Time)->format('H:i:s');
        $businesshour->update([
            'Start_Time' => $request->input('Start_Time'),
            'End_Time' => $request->input('End_Time'),
            'Status' => $request->input('Status'),]);
    
        return redirect()->route('businesshour.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
