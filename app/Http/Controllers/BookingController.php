<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function reserve(Request $req)
    {
        $table=DB::table('restaurant_table')->get();
        $order=$req->otype;
        return view('booking')->with('table',$table)->with('order',$order);
    }
}
