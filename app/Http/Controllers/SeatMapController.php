<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Table;
use Illuminate\Http\Request;

class SeatMapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $seatmap = Shop::all();
        $table = Table::all();
        return view('layouts.seatmap')->with('seatmap', $seatmap)->with('table', $table);
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
        Table::create([
            'T_Id' => $request->input('T_Id'),
            'Shop_Id' => $request->input('Shop_Id'),
            'T_Pax' => $request->input('T_Pax'),
        ]);
     
        return redirect()->route('seatmap.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $seatmap)
    {
        //
        $newImageName = time() . '-' . $request->name . '.' . 
        $request->S_Table->extension();
        $request->S_Table->move(public_path('images'), $newImageName);

        $seatmap->update([
            'S_Table' => $newImageName,
        ]);
    
        return redirect()->route('seatmap.index');
    }

   
    public function updateSeat(Request $request,  $table)
    {
        $Table = Table::find($table);

        //Product Similarity Controller
       $Table->T_Id = $request->T_Id;
       $Table->Shop_Id = $request->Shop_Id;
       $Table->T_Pax = $request->T_Pax;
       $Table->update();

        return redirect()->route('seatmap.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $seatmap)
    {
        //
        $seatmap->delete();
    
        return redirect()->back();
    }
}
