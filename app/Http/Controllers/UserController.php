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
        $id=Auth::id();
        $request->validate([
            
            'name'=> 'required',
            // 'email'=> ['required', 'string', 'email', 'max:255', 
            // 'unique:users,email,$id'
            //             ],
            'phone'=> 'required',
            'street'=> 'required',
            'postcode'=> 'required',
            'city'=> 'required',
            'race'=> 'required',
            'marital'=> 'required',
            'state'=> 'required',
            'birthdate'=> 'required',
            'gender'=> 'required',
            'occupation'=> 'required'
            

        
        ]);

        $updating = DB::table('users')
                    ->where('id', $request->input('cid'))
                    ->update ([
                        'name'=>$request->input('name'),
                        // 'email'=>$request->input('email' ),
                        'phone'=>$request->input('phone' ),
                        'street_1'=>$request->input('street' ),
                        'postcode'=>$request->input('postcode' ),
                        'city'=>$request->input('city' ),
                        'race'=>$request->input('race' ),
                        'marital'=>$request->input('marital' ),
                        'state'=>$request->input('state' ),
                        'birthdate'=>$request->input('birthdate' ),
                        'gender'=>$request->input('gender' ),
                        'occupation'=>$request->input('occupation' ),
                        'race'=>$request->input('race' ),
                        'marital'=>$request->input('marital' )

                    ]);


        if ($updating) {
            return back()-> with ('success' , 'Profile has been successfully updated');
        }else{
            return back() -> with ('fail' , 'Something went wrong');
        }
        

        
   
    }

    public function getName($id){
        $data = Customer::where('id', $id)->value('name');
        return $data;
    }
}
