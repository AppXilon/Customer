<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderTrendsController extends Controller
{
    public static function analytics() {
        
        $payment = DB::select(DB::raw("Select count(CASE WHEN O_Payment = 'Cash' then 1 end) as Cash, count(CASE WHEN O_Payment = 'Paypal' then 1 end) as Paypal FROM customer_db.order;"));
        foreach($payment as $row){
            $orderPayment = "[".$row->Cash.", ".$row->Paypal."]";
        }

        //dd($orderPayment);

        return view('layouts.order_trends', compact('orderPayment'));
    }
}
