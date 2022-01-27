<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function reserve(Request $req)
    {
        $table=DB::table('restaurant_table')->get();
        $bizHour=DB::table('shop_business_hour')->get();
        $img=DB::table('shop')->get();
        $order=$req->otype;
        return view('booking')->with('table',$table)->with('order',$order)->with('img',$img)->with('bizHour',$bizHour);
    }
}
