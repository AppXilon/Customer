<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Table;

class BookingController extends Controller
{
    public function reserve(Request $req)
    {
        $table=DB::table('restaurant_table')->get();
        $bizHour=DB::table('shop_business_hour')->get();
        $img=DB::table('shop')->get();
        $order=$req->otype;
        $tid = Table::pluck('T_Id');
        return view('booking')->with('table',$table)->with('order',$order)->with('img',$img)
        ->with('bizHour',$bizHour)->with('Tid',$tid);
    }
}
