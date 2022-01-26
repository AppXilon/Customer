<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reports\SalesReport;

class SalesController extends Controller
{
    public function __contruct () {
        $this->middleware("guest");
    }
    public function index () {
        $salesreport = new SalesReport;
        $salesreport->run();
        return view("reports.sales",["sales"=>$salesreport]);
    }
}