<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function addToCart(Request $req)
    {
        if(Auth::check())
        {
            $cart=new Cart;
            $cart->Cust_Id=Auth::id();
            $cart->Pro_Id=$req->Pro_Id;
            $cart->Pro_qty=$req->Pro_qty;
            
            if(Cart::where('Cust_Id','=',Auth::id())
                ->where('Pro_Id','=',$req->Pro_Id)->exists())
                {
                    echo "Already in your cart";
                }
            else{
                $cart->save();
                return redirect('/');
            }
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $custId=Auth::id();
        return Cart::where('Cust_Id', $custId)->count();
    }
    function cartList()
    {
        $custId=Auth::id();
        $product=DB::table('cart')
        ->join('product', 'cart.pro_id', '=', 'product.P_Id')
        ->where('cart.cust_id', $custId)
        ->select('product.*','cart.*','cart.id as cart_id')
        ->get();

        return view('cartlist', ['product'=>$product]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function addItem(Product $product)
    {
        $product = Product::find($P_Id);
        Cart::add($P_Id,$product->P_Name,1,$product->P_Price);
        return redirect('cartlist');
    }
    
}
