<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Logs;
use App\Models\OrderProduct;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


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
    function orderDetails(Request $req)
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

        $notes=$req->extranotes;
        $table=DB::table('restaurant_table')->get();
        $payment=DB::table('payment_type')->get();

        return view('checkout_shipping', compact('cartitems', 'notes', 'payment', 'table'));
    }
    function orderPlace(Request $req)
    {
        $order=new Order();
        $order->User_Id =Auth::id();
        $order->O_Name=$req->input('O_Name');
        $order->O_Email=$req->input('O_Email');
        $order->O_Street_1=$req->input('O_Street_1');
        $order->O_Postcode=$req->input('O_Postcode');
        $order->O_City=$req->input('O_City');
        $order->O_State=$req->input('O_State');
        $order->O_Phone=$req->input('O_Phone');
        $order->O_Notes=$req->input('O_Notes');
        $order->O_Payment=$req->payment;
        $order->Tracking_No=rand(1000,9999);
<<<<<<< HEAD
        $order->Remarks=$req->input('Remarks');
    
=======
        
        $logs=new Logs;
        $logs->Cust_Id=Auth::id();
        $logs->Log_Module=$req->input('Log_Module');
        $logs->Log_Pay_Type=0;
        $logs->Log_Status=$req->input('Log_Status');
        $logs->created_at=Carbon::now();
        $logs->updated_at=Carbon::now();
      
        $order->O_Type=$req->otype;

>>>>>>> 648a2b1fb83218c47ae858b245938f280c002a83
        $total = 0;
        $cartitems_total = Cart::where('Cust_Id', Auth::id())->get();
        foreach($cartitems_total as $prod)
        {
            $total += $prod->products->P_Price * $prod->Pro_Qty;
            $otype = $prod->Order_Type;
            $bookdate = $prod->BookDate;
            $booktime = $prod->BookTime;
            $bookpax = $prod->BookPax;
            $booktable = $prod->BookTable;
        }

        $order->O_Type = $otype;
        $order->DateTime = $bookdate;
        $order->T_Pax = $bookpax;
        $order->T_Id = $booktable;
        $order->O_Total_Price = $total;
<<<<<<< HEAD

        $logs=new Logs;
        $logs->Cust_Id=Auth::id();
        $logs->Log_Module=$req->input('Log_Module');
        $logs->Log_Pay_Type=0;
        $logs->Log_Status=$req->input('Log_Status');
        $logs->created_at=Carbon::now();
        $logs->updated_at=Carbon::now();
=======
        $logs->Log_Total_Price=$total;
        $order->save();
        $logs->save();
>>>>>>> 648a2b1fb83218c47ae858b245938f280c002a83

        $cartitems = Cart::where('Cust_Id', Auth::id())->get();
        foreach($cartitems as $item)
        {
            OrderProduct::create([
                'Order_Id'=>$order->id,
                'P_Id'=>$item->Pro_Id,
                'Order_Quantity'=>$item->Pro_Qty,
                'Order_Price'=>$item->products->P_Price*$item->Pro_Qty,
                'Od_Type'=>$item->Order_Type,
            ]);
        }
        $cartitems = Cart::where('Cust_Id', Auth::id())->get();
        Cart::destroy($cartitems);

        return view('checkout_complete');
    }
    public function summary($id)
    {
        $summary = Order::where('User_Id', Auth::id())->get();
        return view('orderplace',compact('summary'));
    }
    public function stripePay(Request $req)
    {
        if($req->type === 'charge.suceeded'){
            try{
                $order=new Order();
                $order->User_Id =Auth::id();
                $order->O_Name=$req->input('O_Name');
                $order->O_Email=$req->input('O_Email');
                $order->O_Street_1=$req->input('O_Street_1');
                $order->O_Postcode=$req->input('O_Postcode');
                $order->O_City=$req->input('O_City');
                $order->O_State=$req->input('O_State');
                $order->O_Phone=$req->input('O_Phone');
                $order->O_Payment=$req->payment;
                $order->Tracking_No=rand(1000,9999);
                $order->Remarks->input('reject');

                $logs=new Logs;
                $logs->Cust_Id=Auth::id();
                $logs->Log_Module=$req->input('Log_Module');
                $logs->Log_Pay_Type=1;
                $logs->Log_Status=$req->input('Log_Status');
                $logs->created_at=Carbon::now();
                $logs->updated_at=Carbon::now();

                $total = 0;
                $cartitems_total = Cart::where('Cust_Id', Auth::id())->get();
                foreach($cartitems_total as $prod)
                {
                    $total += $prod->products->P_Price * $prod->Pro_Qty;
                }

                $order->O_Total_Price = $total;
                $logs->Log_Total_Price=$total;
                $order->save();
                $logs->save();

                $cartitems = Cart::where('Cust_Id', Auth::id())->get();
                foreach($cartitems as $item)
                {
                    OrderProduct::create([
                        'Order_Id'=>$order->id,
                        'P_Id'=>$item->Pro_Id,
                        'Order_Quantity'=>$item->Pro_Qty,
                        'Order_Price'=>$item->products->P_Price*$item->Pro_Qty,
                    ]);
                }
                $cartitems = Cart::where('Cust_Id', Auth::id())->get();
                Cart::destroy($cartitems);
            
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        }
    }
}
