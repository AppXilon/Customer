<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use Session;
use Razorpay\Api\Api;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    function shipping()
    {
        $custId=Auth::id();
        $customer=DB::table('cart')
        ->join('customer', 'cart.cust_id', '=', 'customer.id')
        ->where('cart.cust_id', $custId);

        return view('checkout_shipping');
    }
    function orderDetails()
    {
        $old_cartitems = Cart::where('cust_id', Auth::id())->get();
        foreach($old_cartitems as $item)
        {
            if(Product::where('P_Id', $item->Pro_Id)->where('P_Status', '!=', '1')->exists())
            {
                $removeItem = Cart::where('cust_id', Auth::id())->where('Pro_Id', $item->Pro_Id)->first();
                $removeItem->delete();
            }
        }
        $cartitems = Cart::where('cust_id', Auth::id())->get();

        return view('checkout_shipping', compact('cartitems'));
    }
    

    function orderPlace(Request $req)
    {
        $order=new Order;
        $order->User_Id =Auth::id();
        $order->O_Name=$req->input('name');
        $order->O_Email=$req->input('email');
        $order->O_Street_1=$req->input('street');
        $order->O_Postcode=$req->input('postcode');
        $order->O_City=$req->input('city');
        $order->O_State=$req->input('state');
        $order->O_Phone=$req->input('phone');
        $order->O_Payment=$req->payment;
        $order->Tracking_No=rand(1000,9999);

        $total = 0;
        $cartitems_total = Cart::where('Cust_Id', Auth::id())->get();
        foreach($cartitems_total as $prod)
        {
            $total += $prod->products->P_Price * $prod->Pro_Qty;
        }

        $order->O_Total_Price = $total;
        $order->save();

        $cartitems = Cart::where('Cust_Id', Auth::id())->get();
        foreach($cartitems as $item)
        {
            OrderProduct::create([
                'Order_Id'=>$order->id,
                'U_Id'=>$item->Cust_Id,
                'P_Id'=>$item->Pro_Id,
                'Order_Quantity'=>$item->Pro_Qty,
                'Order_Price'=>$item->products->P_Price*$item->Pro_Qty,
            ]);
        }
        $cartitems = Cart::where('Cust_Id', Auth::id())->get();
        Cart::destroy($cartitems);

        if($req->input('O_Payment') == "paypal")
        {
            return response()->json(['O_Status' => "Order Success"]);
        }
        return view('checkout_complete')->with('O_Status', "Order Success");
    }

    function razorpaycheck(Request $req)
    {
        $cartitems = Cart::where('Cust_Id', Auth::id())->get();
        $total_price = 0;
        foreach($cartitems as $prod)
        {
            $total_price += $prod->products->P_Price * $prod->Pro_Qty;
        }

        $cname = $req->input('cname');
        $cemail = $req->input('cemail'); 
        $cphone = $req->input('cphone'); 
        $cstreet = $req->input('cstreet');
        $cpostcode = $req->input('cpostcode');
        $ccity = $req->input('ccity');
        $cstate = $req->input('cstate');        

        return response()->json([
            'cname'=> $cname, 
            'cemail'=> $cemail, 
            'cphone'=> $cphone, 
            'cstreet'=> $cstreet,
            'cpostcode'=>$cpostcode,
            'ccity'=>$ccity,
            'cstate'=>$cstate,
            'total_price'=> $total_price
        ]);
    }
}
