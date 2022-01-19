<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hour;


class TestController extends Controller
{
    //
    public function changeDayStatus(Request $request){
        try{
            $biz_hour= Hour::findrFail($request->day_id);
            $biz_hour->day_off = $request->day_off;
            $biz_hour->save();

            return response()->json(['success'=>'User status change successfully.']);
        }catch(\Exception $e){
            // do task when error
            echo $e->getMessage();   // insert query
         }
        
    }
}
