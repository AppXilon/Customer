<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Customer::where('C_Ban', 0)->get();
        return view('admin-layouts.man_cust',['customers'=>$data]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-layouts.add_cust');
    }

    public function store(Request $request)
    {
        $request->validate([
            'C_Name' => 'required',
            'C_Phone' => 'required',
            'C_Password' => 'required',
            'C_Gender' => 'required',
            'C_BirthDate' => 'required',
            'C_Email' => 'required',
            'C_Ban' => 'required',
            'C_Reason' => 'required'
        ]);
    
        Customer::create($request->all());
     
        return redirect()->route('customer.index')
                        ->with('success','Customer created successfully.');
    }
    public function edit(Customer $customer)
    {
        return view('admin-layouts.action_ban', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
        $customer->update($request->all());
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
