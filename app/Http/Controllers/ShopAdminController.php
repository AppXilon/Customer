<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopAdminController extends Controller
{
    public function index()
    {
        //
        $data = Shop::where('S_Status', 0)->get();
        return view('admin-layouts.man_rest')->with('shop',$data);
    }

    public function indexPend()
    {
        //
    }

    public function indexBan()
    {
        //
        $data = Shop::where('S_Status', 1)->get();
        return view('admin-layouts.ban_rest')->with('shop',$data);
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
        Shop::create($request->all());
        return redirect()->route('shop.index')
                        ->with('success','Shop created successfully.');
    }
    public function shopStore(Request $request)
    {
        //
        Shop::create($request->all());
        $name=$request->S_Name;
        $shop = Shop::where('S_Name', $name)->value('Shop_Id');

        return view('partner')->with('success','Shop created successfully.')->with('shop',$shop);

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
    public function edit(Shop $shop)
    {
        return view('admin-layouts.action_ban_rest', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
        $shop->update($request->all());
        return redirect()->route('shop.index');
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
