<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustAnalyticsController extends Controller
{
    //
    public static function analytics() {
        
        
        $totCust = DB::select(DB::raw("SELECT COUNT(id) as total FROM users"));
        foreach($totCust as $row){
            $totalCustomer = "$row->total";
        }
        

        $todCust = DB::SELECT(DB::raw("SELECT COUNT(DISTINCT User_Id) as total FROM fyp.order Where created_at >= DATE(SYSDATE())"));
        foreach($todCust as $row){
            $todayCustomer = "$row->total";
        }

        $sent = DB::select(DB::raw("Select count(CASE WHEN R_Sentiment = 'Negative' then 1 end) as Negative, count(CASE WHEN R_Sentiment = 'Neutral' then 1 end) as Neutral, count(CASE WHEN R_Sentiment = 'Positive' then 1 end) as Positive FROM review"));
        foreach($sent as $row){
            $sentimentAnalysis = "[".$row->Negative.", ".$row->Neutral.", ".$row->Positive."]";
        }

        $gender = DB::select(DB::raw("Select count(CASE WHEN gender = 'Female' then 1 end) as Female, count(CASE WHEN gender = 'Male' then 1 end) as Male FROM USERS"));
        foreach($gender as $row){
            $custGender = "[".$row->Female.", ".$row->Male."]";
        }

        //echo($sentimentAnalysis);
        return view('layouts.cust_analytics', compact('totalCustomer', 'todayCustomer', 'sentimentAnalysis', 'custGender'));
    }
}
