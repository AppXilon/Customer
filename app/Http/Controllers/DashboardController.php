<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard() {
        
        $totOrder = DB::select(DB::raw("SELECT COUNT(id) as total FROM customer_order"));
        foreach ($totOrder as $row) {
            $totalOrder = "$row->total";
        }

        $pendOrder = DB::select(DB::raw("SELECT count(id) as pending from customer_order where O_Status=1 or O_Status=2;"));
        foreach ($pendOrder as $row) {
            $pendingOrder = "$row->pending";
        }

        $compOrder = DB::select(DB::raw("SELECT count(id) as complete from customer_order where O_Status=3;"));
        foreach ($compOrder as $row) {
            $completeOrder = "$row->complete";
        }

        $totSales = DB::select(DB::raw("SELECT sum(O_Total_Price) as sale from customer_order;"));
        foreach ($totSales as $row) {
            $totalSales = "$row->sale";
        }

        $sales = DB::select(DB::raw("SELECT 
        Sum(CASE WHEN MONTH(created_at) = 1 THEN O_Total_Price END) AS January,
        Sum(CASE WHEN MONTH(created_at) = 2 THEN O_Total_Price END) AS February,
        Sum(CASE WHEN MONTH(created_at) = 3 THEN O_Total_Price END) AS March,
        Sum(CASE WHEN MONTH(created_at) = 4 THEN O_Total_Price END) AS April,
        Sum(CASE WHEN MONTH(created_at) = 5 THEN O_Total_Price END) AS May,
        Sum(CASE WHEN MONTH(created_at) = 6 THEN O_Total_Price END) AS June,
        Sum(CASE WHEN MONTH(created_at) = 7 THEN O_Total_Price END) AS July,
        Sum(CASE WHEN MONTH(created_at) = 8 THEN O_Total_Price END) AS August,
        Sum(CASE WHEN MONTH(created_at) = 9 THEN O_Total_Price END) AS September,
        Sum(CASE WHEN MONTH(created_at) = 10 THEN O_Total_Price END) AS October,
        Sum(CASE WHEN MONTH(created_at) = 11 THEN O_Total_Price END) AS November,
        Sum(CASE WHEN MONTH(created_at) = 12 THEN O_Total_Price END) AS 'December'
        from customer_order
        "));
        foreach($sales as $row){
            $salesChart = "[".$row->January.", ".$row->February.", ".$row->March.", ".$row->April.", ".$row->May.", ".$row->June.", ".$row->July.", ".$row->August.", ".$row->September.", ".$row->October.", ".$row->November.", ".$row->December."]";

        }

        $avgRate = DB::select(DB::raw("SELECT ROUND( AVG(R_Rating),1 ) as average from review;"));
        foreach ($avgRate as $row) {
            $avgRating = "$row->average";
        }

        $totReview = DB::select(DB::raw("SELECT count(*) as total from review"));
        foreach ($totReview as $row) {
            $totalReview = "$row->total";
        }

        $five = DB::select(DB::raw("SELECT count(*) as rate from review where R_Rating=5;"));
        foreach ($five as $row) {
            $fiveRating = "$row->rate";
        }

        $four = DB::select(DB::raw("SELECT count(*) as rate from review where R_Rating=4;"));
        foreach ($four as $row) {
            $fourRating = "$row->rate";
        }

        $three = DB::select(DB::raw("SELECT count(*) as rate from review where R_Rating=3;"));
        foreach ($three as $row) {
            $threeRating = "$row->rate";
        }

        $two = DB::select(DB::raw("SELECT count(*) as rate from review where R_Rating=2;"));
        foreach ($two as $row) {
            $twoRating = "$row->rate";
        }

        $one = DB::select(DB::raw("SELECT count(*) as rate from review where R_Rating=1;"));
        foreach ($one as $row) {
            $oneRating = "$row->rate";
        }

        
        

        return view('layouts.index', compact(
            'totalOrder',
            'pendingOrder',
            'completeOrder',
            'totalSales',
            'salesChart',
            'avgRating',
            'totalReview',
            'fiveRating',
            'fourRating',
            'threeRating',
            'twoRating',
            'oneRating'
            
        ));




    }
}
