<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addReview($P_Id)
    {
        $data = array(
            'list' => DB::table ('product') ->where('P_Id', $P_Id) -> get()
            
        );
        return view('write-review', $data);
    }

    public function submitReview(Request $request){
        
        $request->validate([
            'comment'=> 'required',
            // 'R_Image' => 'required|mimes:kpg,png,jpeg|max:5048'

        ]);

        // $newImageName = time() . '-' . $request->name . '.' . 
        // $request->R_Image->extension();
        // $request->R_Image->move(public_path('images'), $newImageName);

        $UserId=Auth::id();
        $query = DB::table('review') ->insert ([

                        'User_Id'=> $UserId,
                        'P_Id'=>$request->input('productID' ),
                        'R_Rating'=>$request->input('R_Rating' ),
                        'R_Comment'=>$request->input('comment' ),
                        // 'R_Image' => $newImageName,
                        "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                        "updated_at" => \Carbon\Carbon::now(), 
                    

                    ]);
        
        if ($query) {
            return back() -> with ('success' , 'Review has been successfully submitted');
        }else{
            return back() -> with ('fail' , 'Something went wrong');
        }

    }

    // public function viewReview(){
    //     $data=array(
    //         'list' => DB::table ('review')->where('P_Id', $id) -> get()
    //         return view('profile-detail', $data);

    //     );
    // }

}
