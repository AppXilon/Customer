<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Manager;

class UserController extends Controller
{
    public function orderHistory()
    {
        $order = Order::where('User_Id', Auth::id())->get();
        return view('order_history',compact('order'));
    }

    public function viewHistory($id)
    {
        $order = Order::where('id', $id)->where('User_Id', Auth::id())->first();
        return view('history_detail',compact('order'));
    }

    public function profileDetail()
    {

        $id=Auth::id();
        $data = array(
            'list' => DB::table ('users') ->where('id', $id) -> get()
            
        );
        return view('profile-detail', $data);
    }

    public function edit($id){
        $row = DB::table('users')
                ->where('id', $id)
                ->first();
        $data = [
        'Info'=>$row,
        'Title' => 'Edit'
        ];

        return view ('update-profile' , $data );
    }

    public function update(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required',
            'street_1'=> 'required',
            'postcode'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'birthdate'=> 'required',
            'gender'=> 'required',
            'occupation'=> 'required',
            'race'=> 'required',
            'marital'=> 'required'
        
        ]);

        $updating = DB::table('users')
                    ->where('id', $request->input('cid'))
                    ->update ([
                        'name'=>$request->input('name'),
                        'email'=>$request->input('email' ),
                        'phone'=>$request->input('phone' ),
                        'street_1'=>$request->input('street_1' ),
                        'postcode'=>$request->input('postcode' ),
                        'city'=>$request->input('city' ),
                        'state'=>$request->input('state' ),
                        'birthdate'=>$request->input('birthdate' ),
                        'gender'=>$request->input('gender' ),
                        'occupation'=>$request->input('occupation' ),
                        'race'=>$request->input('race' ),
                        'marital'=>$request->input('marital' )

                    ]);

             
        return redirect ('profileDetail');
        

    }
    function showCustNotBan(){
        $data = Customer::where('C_Ban', 0)->get();
        return view('admin-layouts.man_cust',['customer'=>$data]);
    }
    function showCustBan(){
        $data1 = Customer::where('C_Ban', 1)->get();
        //$data2 = Manager::where('M_Ban', 1)->get();
        //$data = $data1 -> unionAll($data2);+
        return view('admin-layouts.ban_user',['customer'=>$data1]);
    }
    function showManNotBan(){
        $data = Manager::where('M_Ban', 0)->get();
        return view('admin-layouts.man_manager',['manager'=>$data]);
    }
    function showManBan(){
        $data = Manager::where('M_Ban', 1)->get();
        return view('admin-layouts.ban_user',['manager'=>$data]);
    }
}
