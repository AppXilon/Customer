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

        $newCust = DB::SELECT(DB::raw("SELECT count(*) as new from users where created_at between date_sub(now(),INTERVAL 1 WEEK) and now();"));
        foreach($newCust as $row) {
            $newCustomer = "$row->new";
        }

        $repeatCust = DB::SELECT(DB::raw("SELECT COUNT(DISTINCT(User_Id)) as 'repeat' FROM fyp.order;"));
        foreach($repeatCust as $row) {
            $repeatCustomer = "$row->repeat";
        }

        $sent = DB::select(DB::raw("SELECT count(CASE WHEN R_Sentiment = 'Negative' then 1 end) as Negative, count(CASE WHEN R_Sentiment = 'Neutral' then 1 end) as Neutral, 
        count(CASE WHEN R_Sentiment = 'Positive' then 1 end) as Positive FROM review"));
        foreach($sent as $row){
            $sentimentAnalysis = "[".$row->Negative.", ".$row->Neutral.", ".$row->Positive."]";
        }

        $sentWeek = DB::select(DB::raw("SELECT count(CASE WHEN R_Sentiment = 'Negative' then 1 end) as Negative, count(CASE WHEN R_Sentiment = 'Neutral' then 1 end) as Neutral, 
        count(CASE WHEN R_Sentiment = 'Positive' then 1 end) as Positive FROM review 
        where created_at between date_sub(now(),INTERVAL 1 WEEK) and now();"));
        foreach($sentWeek as $row){
            $sentimentAnalysisWeek = "[".$row->Negative.", ".$row->Neutral.", ".$row->Positive."]";
        }

        $sentMonth = DB::select(DB::raw("SELECT count(CASE WHEN R_Sentiment = 'Negative' then 1 end) as Negative, count(CASE WHEN R_Sentiment = 'Neutral' then 1 end) as Neutral, 
        count(CASE WHEN R_Sentiment = 'Positive' then 1 end) as Positive FROM review 
        where created_at between date_sub(now(),INTERVAL 2 MONTH) and now();"));
        foreach($sentMonth as $row){
            $sentimentAnalysisMonth = "[".$row->Negative.", ".$row->Neutral.", ".$row->Positive."]";
        }

        $sentYear = DB::select(DB::raw("SELECT count(CASE WHEN R_Sentiment = 'Negative' then 1 end) as Negative, count(CASE WHEN R_Sentiment = 'Neutral' then 1 end) as Neutral, 
        count(CASE WHEN R_Sentiment = 'Positive' then 1 end) as Positive FROM review 
        where created_at between date_sub(now(),INTERVAL 1 YEAR) and now();"));
        foreach($sentYear as $row){
            $sentimentAnalysisYear = "[".$row->Negative.", ".$row->Neutral.", ".$row->Positive."]";
        }

        $gender = DB::select(DB::raw("SELECT count(CASE WHEN gender = 'Female' then 1 end) as Female, count(CASE WHEN gender = 'Male' then 1 end) as Male FROM USERS"));
        foreach($gender as $row){
            $custGender = "[".$row->Female.", ".$row->Male."]";
        }

        $genderWeek = DB::select(DB::raw("SELECT count(CASE WHEN gender = 'Female' then 1 end) as Female, count(CASE WHEN gender = 'Male' then 1 end) as Male FROM USERS 
        where created_at between date_sub(now(),INTERVAL 1 WEEK) and now();"));
        foreach($genderWeek as $row){
            $custGenderWeek = "[".$row->Female.", ".$row->Male."]";
        }

        $genderMonth = DB::select(DB::raw("SELECT count(CASE WHEN gender = 'Female' then 1 end) as Female, count(CASE WHEN gender = 'Male' then 1 end) as Male FROM USERS 
        where created_at between date_sub(now(),INTERVAL 2 MONTH) and now();"));
        foreach($genderMonth as $row){
            $custGenderMonth = "[".$row->Female.", ".$row->Male."]";
        }

        $genderYear = DB::select(DB::raw("SELECT count(CASE WHEN gender = 'Female' then 1 end) as Female, count(CASE WHEN gender = 'Male' then 1 end) as Male FROM USERS 
        where created_at between date_sub(now(),INTERVAL 1 YEAR) and now();"));
        foreach($genderYear as $row){
            $custGenderYear = "[".$row->Female.", ".$row->Male."]";
        }

        $age = DB::select(DB::raw("SELECT count(case when TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) > 30 then 1 end) AS less, 
        count(case when TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) < 31 then 1 end) AS more from users;"));
        foreach($age as $row) {
            $custAge = "[".$row->less.", ".$row->more."]";
        }

        $ageWeek = DB::select(DB::raw("SELECT count(case when TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) > 30 then 1 end) AS less, 
        count(case when TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) < 31 then 1 end) AS more from users where created_at between date_sub(now(),INTERVAL 1 WEEK) and now();"));
        foreach($ageWeek as $row){
            $custAgeWeek = "[".$row->less.", ".$row->more."]";
        }

        $ageMonth = DB::select(DB::raw("SELECT count(case when TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) > 30 then 1 end) AS less, 
        count(case when TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) < 31 then 1 end) AS more from users where created_at between date_sub(now(),INTERVAL 2 MONTH) and now();"));
        foreach($ageMonth as $row){
            $custAgeMonth = "[".$row->less.", ".$row->more."]";
        }

        $ageYear = DB::select(DB::raw("SELECT count(case when TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) > 30 then 1 end) AS less, 
        count(case when TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) < 31 then 1 end) AS more from users where created_at between date_sub(now(),INTERVAL 1 YEAR) and now();"));
        foreach($ageYear as $row){
            $custAgeYear = "[".$row->less.", ".$row->more."]";
        }
       
        $marital = DB::select(DB::raw("SELECT COUNT(CASE WHEN marital = 'Single' then 1 end) as Single, COUNT(CASE WHEN marital = 'Married' then 1 end) as Married, 
        COUNT(CASE WHEN marital = 'Widowed' then 1 end) as Widowed, COUNT(CASE WHEN marital = 'Divorced' then 1 end) as Divorced FROM users;"));
        foreach($marital as $row) {
            $custMarital = "[".$row->Single.", ".$row->Married.", ".$row->Widowed.", ".$row->Divorced."]";
        }

        $maritalWeek = DB::select(DB::raw("SELECT COUNT(CASE WHEN marital = 'Single' then 1 end) as Single, COUNT(CASE WHEN marital = 'Married' then 1 end) as Married, 
        COUNT(CASE WHEN marital = 'Widowed' then 1 end) as Widowed, COUNT(CASE WHEN marital = 'Divorced' then 1 end) as Divorced FROM users 
        where created_at between date_sub(now(),INTERVAL 1 WEEK) and now();"));
        foreach($maritalWeek as $row){
            $custMaritalWeek = "[".$row->Single.", ".$row->Married.", ".$row->Widowed.", ".$row->Divorced."]";
        }

        $maritalMonth = DB::select(DB::raw("SELECT COUNT(CASE WHEN marital = 'Single' then 1 end) as Single, COUNT(CASE WHEN marital = 'Married' then 1 end) as Married, 
        COUNT(CASE WHEN marital = 'Widowed' then 1 end) as Widowed, COUNT(CASE WHEN marital = 'Divorced' then 1 end) as Divorced FROM users 
        where created_at between date_sub(now(),INTERVAL 2 MONTH) and now();"));
        foreach($maritalMonth as $row){
            $custMaritalMonth = "[".$row->Single.", ".$row->Married.", ".$row->Widowed.", ".$row->Divorced."]";
        }

        $maritalYear = DB::select(DB::raw("SELECT COUNT(CASE WHEN marital = 'Single' then 1 end) as Single, COUNT(CASE WHEN marital = 'Married' then 1 end) as Married, 
        COUNT(CASE WHEN marital = 'Widowed' then 1 end) as Widowed, COUNT(CASE WHEN marital = 'Divorced' then 1 end) as Divorced FROM users 
        where created_at between date_sub(now(),INTERVAL 1 YEAR) and now();"));
        foreach($maritalYear as $row){
            $custMaritalYear = "[".$row->Single.", ".$row->Married.", ".$row->Widowed.", ".$row->Divorced."]";
        }

        $race = DB::select(DB::raw("SELECT COUNT(CASE WHEN race = 'Malay' then 1 end) as Malay, COUNT(CASE WHEN race = 'Chinese' then 1 end) as Chinese, 
        COUNT(CASE WHEN race = 'Indian' then 1 end) as Indian, COUNT(CASE WHEN race = 'Other' then 1 end) as Other FROM users;"));
        foreach($race as $row) {
            $custRace = "[".$row->Malay.", ".$row->Chinese.", ".$row->Indian.", ".$row->Other."]";
        }

        $raceWeek = DB::select(DB::raw("SELECT COUNT(CASE WHEN race = 'Malay' then 1 end) as Malay, COUNT(CASE WHEN race = 'Chinese' then 1 end) as Chinese, 
        COUNT(CASE WHEN race = 'Indian' then 1 end) as Indian, COUNT(CASE WHEN race = 'Other' then 1 end) as Other FROM users 
        where created_at between date_sub(now(),INTERVAL 1 WEEK) and now();"));
        foreach($raceWeek as $row){
            $custRaceWeek = "[".$row->Malay.", ".$row->Chinese.", ".$row->Indian.", ".$row->Other."]";
        }

        $raceMonth = DB::select(DB::raw("SELECT COUNT(CASE WHEN race = 'Malay' then 1 end) as Malay, COUNT(CASE WHEN race = 'Chinese' then 1 end) as Chinese, 
        COUNT(CASE WHEN race = 'Indian' then 1 end) as Indian, COUNT(CASE WHEN race = 'Other' then 1 end) as Other FROM users 
        where created_at between date_sub(now(),INTERVAL 2 MONTH) and now();"));
        foreach($raceMonth as $row){
            $custRaceMonth = "[".$row->Malay.", ".$row->Chinese.", ".$row->Indian.", ".$row->Other."]";
        }

        $raceYear = DB::select(DB::raw("SELECT COUNT(CASE WHEN race = 'Malay' then 1 end) as Malay, COUNT(CASE WHEN race = 'Chinese' then 1 end) as Chinese, 
        COUNT(CASE WHEN race = 'Indian' then 1 end) as Indian, COUNT(CASE WHEN race = 'Other' then 1 end) as Other FROM users 
        where created_at between date_sub(now(),INTERVAL 1 YEAR) and now();"));
        foreach($raceYear as $row){
            $custRaceYear = "[".$row->Malay.", ".$row->Chinese.", ".$row->Indian.", ".$row->Other."]";
        }

        

        //echo($sentimentAnalysis);
        return view('layouts.cust_analytics', compact('totalCustomer', 'todayCustomer', 'newCustomer', 'repeatCustomer', 'sentimentAnalysis', 'sentimentAnalysisWeek', 'sentimentAnalysisMonth', 'sentimentAnalysisYear',
        'custGender', 'custGenderWeek', 'custGenderMonth', 'custGenderYear', 'custAge', 'custAgeWeek', 'custAgeMonth', 'custAgeYear', 
        'custMarital', 'custMaritalWeek', 'custMaritalMonth', 'custMaritalYear', 'custRace', 'custRaceWeek', 'custRaceMonth', 'custRaceYear'));
    }
}
