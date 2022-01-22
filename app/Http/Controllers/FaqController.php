<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
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
    

    public function faqindex()
    {
        $data = array(
           'list' => DB::table ('faq') ->get()

        );
        return view('faq',  $data);
    }
    public function faq_index()
    {
        $data = array(
           'list' => DB::table ('faq') ->get()

        );
        return view('faq',  $data);
    }

    public function faq_manager_index()
    {
        $data = array(
           'list' => DB::table ('faq') ->get()

        );
        return view('admin-layouts.faq-manager',  $data);
    }

    public function add_faq(Request $request)
    {
        $request->validate([
            'Faq_Category'=> 'required',
            'Faq_Question'=> 'required',
            'Faq_Answer'=> 'required',
        ]);

       
        $query = DB::table('faq') ->insert ([


                        'Faq_Category'=>$request->input('R_Rating' ),
                        'Faq_Question'=>$request->input('comment' ),
                        'R_Image'=>$request->input('R_Image' ),
                        "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                        "updated_at" => \Carbon\Carbon::now(), 


                    ]);

        if ($query) {
            return back() -> with ('success' , 'Review has been successfully submitted');
        }else{
            return back() -> with ('fail' , 'Something went wrong');
        }
    }
}
