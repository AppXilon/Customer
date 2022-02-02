<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Review;


class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $feedback = DB::select(DB::raw("SELECT R.Review_Id, U.name as C_Name, P.P_Name as P_Name, R.R_Rating, R.R_Comment, R_Sentiment
        FROM review R
        INNER JOIN users U
          ON (R.User_Id = U.id)
        INNER JOIN product P
          ON (R.P_Id = P.P_Id)
         GROUP BY Review_Id, U.name, P.P_Name, R_Rating, R.R_Comment, R_Sentiment
         ORDER BY 1 ASC;"));
        
        return view('layouts.feedback', compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $feedback)
    {
        $feedback->delete();
    
        return view('layouts.product-review') ->with ('success','Review deleted successfully.');
    }
}
