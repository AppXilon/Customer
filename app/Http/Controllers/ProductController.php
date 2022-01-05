<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function index()
    {
        $products=DB::table('product')->get();
        $category=DB::table('product_category')->get();
        $cart=DB::table('cart')->get();

        return view('catalogue')->with('products',$products)->with('category',$category)->with('cart',$cart);

    }
    function detail($P_Id)
    {
        $data = Product::find($P_Id);
        return view('detail', ['detail'=>$data]);
    }
    function viewcategory($P_Cat_Id)
    {
        if (request()->P_Cat_Name)
        {
            $products = Product::with('product_category')->whereHas('categories', function($query){
                 $query->where('P_Cat_Name', request()->category);
            })->get();
            $category = Category::where('P_Cat_Slug', $slug)->first();
        }
        else
        {
            $category = Category::where('P_Cat_Slug', $slug)->first();
            $products = Product::where('Cat_Id', $category->P_Cat_Id)->where('P_Status','1')->get();
        }
        
        return view('catalogue',compact('category','products'));
    }
    function search(Request $req)
    {
       $data=Product::where('P_Name', 'like', '%'.$req->input('query').'%')->get();
       return view('search', ['product'=>$data]);
    }
}
