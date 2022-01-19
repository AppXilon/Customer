<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;

class ManagerController extends Controller
{
    public function index()
    {
        $data = Manager::where('M_Ban', 0)->get();
        return view('admin-layouts.man_manager',['manager'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-layouts.add_cust');
    }

    public function store(Request $request)
    {
        $request->validate([
            'M_Name' => 'required',
            'M_Password' => 'required',
            'M_Email' => 'required',
            'M_Ban' => 'required',
            'M_Reason' => 'required'
        ]);
    
        Manager::create($request->all());
     
        return redirect()->route('manager.index')
                        ->with('success','Manager created successfully.');
    }
    public function edit(Manager $manager)
    {
        return view('admin-layouts.action_ban_man', compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manager $manager)
    {
        //
        $manager->update($request->all());
        return redirect()->route('manager.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manager $manager)
    {
        //
    }
}
