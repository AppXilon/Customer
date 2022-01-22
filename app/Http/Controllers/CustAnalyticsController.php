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

        $newCust = DB::SELECT(DB::raw("select count(*) as new from users where created_at between date_sub(now(),INTERVAL 1 WEEK) and now();"));
        foreach($newCust as $row) {
            $newCustomer = "$row->new";
        }

        $repeatCust = DB::SELECT(DB::raw("select count(*) as new from users where created_at between date_sub(now(),INTERVAL 1 WEEK) and now();"));
        foreach($repeatCust as $row) {
            $repeatCustomer = "$row->repeat";
        }

        $sent = DB::select(DB::raw("Select count(CASE WHEN R_Sentiment = 'Negative' then 1 end) as Negative, count(CASE WHEN R_Sentiment = 'Neutral' then 1 end) as Neutral, count(CASE WHEN R_Sentiment = 'Positive' then 1 end) as Positive FROM review"));
        foreach($sent as $row){
            $sentimentAnalysis = "[".$row->Negative.", ".$row->Neutral.", ".$row->Positive."]";
        }

        $gender = DB::select(DB::raw("Select count(CASE WHEN gender = 'Female' then 1 end) as Female, count(CASE WHEN gender = 'Male' then 1 end) as Male FROM USERS"));
        foreach($gender as $row){
            $custGender = "[".$row->Female.", ".$row->Male."]";
        }

        $age = DB::select(DB::raw("select count(case when TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) > 30 then 1 end) AS less, count(case when TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) < 31 then 1 end) AS more from users;"));
        foreach($age as $row) {
            $custAge = "[".$row->less.", ".$row->more."]";
        }

        $marital = DB::select(DB::raw("SELECT COUNT(CASE WHEN marital = 'Single' then 1 end) as Single, COUNT(CASE WHEN marital = 'Married' then 1 end) as Married, COUNT(CASE WHEN marital = 'Widowed' then 1 end) as Widowed, COUNT(CASE WHEN marital = 'Divorced' then 1 end) as Divorced FROM users;"));
        foreach($marital as $row) {
            $custMarital = "[".$row->Single.", ".$row->Married.", ".$row->Widowed.", ".$row->Divorced."]";
        }

        $race = DB::select(DB::raw("SELECT COUNT(CASE WHEN race = 'Malay' then 1 end) as Malay, COUNT(CASE WHEN race = 'Chinese' then 1 end) as Chinese, COUNT(CASE WHEN race = 'Indian' then 1 end) as Indian, COUNT(CASE WHEN race = 'Other' then 1 end) as Other FROM users;"));
        foreach($race as $row) {
            $custRace = "[".$row->Malay.", ".$row->Chinese.", ".$row->Indian.", ".$row->Other."]";
        }

        

        //echo($sentimentAnalysis);
        return view('layouts.cust_analytics', compact('totalCustomer', 'todayCustomer', 'sentimentAnalysis', 'custGender', 'custAge', 'custMarital','custRace'));
    }
}
