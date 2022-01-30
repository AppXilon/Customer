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
        $custId = Auth::id();
        $customer = DB::table('cart')
            ->join('customer', 'cart.cust_id', '=', 'customer.id')
            ->where('cart.cust_id', $custId);

        return view('checkout_shipping');
    }
    function orderDetails(Request $req)
    {
        $old_cartitems = Cart::where('cust_id', Auth::id())->get();
        foreach ($old_cartitems as $item) {
            if (Product::where('P_Id', $item->Pro_Id)->where('P_Status', '!=', '1')->exists()) {
                $removeItem = Cart::where('cust_id', Auth::id())->where('Pro_Id', $item->Pro_Id)->first();
                $removeItem->delete();
            }
        }
        $cartitems = Cart::where('cust_id', Auth::id())->get();

        $notes = $req->extranotes;
        $table = DB::table('restaurant_table')->get();
        $payment = DB::table('payment_type')->get();

        return view('checkout_shipping', compact('cartitems', 'notes', 'payment', 'table'));
    }
    function orderPlace(Request $req)
    {
<<<<<<< HEAD
        if(Cart::where('Order_Type'== 'dineIn')){
            $order = new Order();
            $order->User_Id = Auth::id();
            $order->O_Name = $req->input('O_Name');
            $order->O_Email = $req->input('O_Email');
            $order->O_Street_1 = $req->input('O_Street_1');
            $order->O_Postcode = $req->input('O_Postcode');
            $order->O_City = $req->input('O_City');
            $order->O_State = $req->input('O_State');
            $order->O_Phone = $req->input('O_Phone');
            $order->O_Notes = $req->input('O_Notes');
            $order->O_Payment = $req->payment;
            $order->Tracking_No = rand(1000, 9999);
            $order->Remarks = $req->input('Remarks');
            $order->T_Id = $req->input('TableNo');

            $total = 0;
            $cartitems_total = Cart::where('Cust_Id', Auth::id())->get();
            foreach ($cartitems_total as $prod) {
                $total += $prod->products->P_Price * $prod->Pro_Qty;
                $otype = $prod->Order_Type;
            }

            $order->O_Type = $otype;
            $order->O_Total_Price = $total;
            $order->save();

            $logs = new Logs;
            $logs->Cust_Id = Auth::id();
            $logs->Log_Module = $req->input('Log_Module');
            $logs->Log_Pay_Type = 0;
            $logs->Log_Status = $req->input('Log_Status');
            $logs->created_at = Carbon::now();
            $logs->updated_at = Carbon::now();

            $cartitems = Cart::where('Cust_Id', Auth::id())->get();
            foreach ($cartitems as $item) {
                OrderProduct::create([
                    'Order_Id' => $order->id,
                    'P_Id' => $item->Pro_Id,
                    'Order_Quantity' => $item->Pro_Qty,
                    'Order_Price' => $item->products->P_Price * $item->Pro_Qty,
                ]);
            }
            $cartitems = Cart::where('Cust_Id', Auth::id())->get();
            Cart::destroy($cartitems);

            return view('checkout_complete');
        }
        elseif(Cart::where('Order_Type'== 'booking')){
            $order = new Order();
            $order->User_Id = Auth::id();
            $order->O_Name = $req->input('O_Name');
            $order->O_Email = $req->input('O_Email');
            $order->O_Street_1 = $req->input('O_Street_1');
            $order->O_Postcode = $req->input('O_Postcode');
            $order->O_City = $req->input('O_City');
            $order->O_State = $req->input('O_State');
            $order->O_Phone = $req->input('O_Phone');
            $order->O_Notes = $req->input('O_Notes');
            $order->O_Payment = $req->payment;
            $order->Tracking_No = rand(1000, 9999);
            $order->Remarks = $req->input('Remarks');

            $total = 0;
            $cartitems_total = Cart::where('Cust_Id', Auth::id())->get();
            foreach ($cartitems_total as $prod) {
                $total += $prod->products->P_Price * $prod->Pro_Qty;
                $otype = $prod->Order_Type;
                $bookdate = $prod->BookDate;
                $booktime = $prod->BookTime;
                $bookpax = $prod->BookPax;
                $booktable = $prod->BookTable;
            }

            $combinedDT = date('Y-m-d H:i:s', strtotime("$bookdate $booktime"));

            $order->O_Type = $otype;
            $order->DateTime = $combinedDT;
            $order->T_Pax = $bookpax;
            $order->T_Id = $booktable;
            $order->O_Total_Price = $total;
            $order->save();

            $logs = new Logs;
            $logs->Cust_Id = Auth::id();
            $logs->Log_Module = $req->input('Log_Module');
            $logs->Log_Pay_Type = 0;
            $logs->Log_Status = $req->input('Log_Status');
            $logs->created_at = Carbon::now();
            $logs->updated_at = Carbon::now();

            $cartitems = Cart::where('Cust_Id', Auth::id())->get();
            foreach ($cartitems as $item) {
                OrderProduct::create([
                    'Order_Id' => $order->id,
                    'P_Id' => $item->Pro_Id,
                    'Order_Quantity' => $item->Pro_Qty,
                    'Order_Price' => $item->products->P_Price * $item->Pro_Qty,
                ]);
            }
            $cartitems = Cart::where('Cust_Id', Auth::id())->get();
            Cart::destroy($cartitems);

            return view('checkout_complete');
=======
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
        $order->Remarks=$req->input('Remarks');

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
>>>>>>> 07c65b5f210e79c78c03ecb65e41831db4332297
        }
        elseif(Cart::where('Order_Type'== 'pickUp')){
            $order = new Order();
            $order->User_Id = Auth::id();
            $order->O_Name = $req->input('O_Name');
            $order->O_Email = $req->input('O_Email');
            $order->O_Street_1 = $req->input('O_Street_1');
            $order->O_Postcode = $req->input('O_Postcode');
            $order->O_City = $req->input('O_City');
            $order->O_State = $req->input('O_State');
            $order->O_Phone = $req->input('O_Phone');
            $order->O_Notes = $req->input('O_Notes');
            $order->O_Payment = $req->payment;
            $order->Tracking_No = rand(1000, 9999);
            $order->Remarks = $req->input('Remarks');

            $total = 0;
            $cartitems_total = Cart::where('Cust_Id', Auth::id())->get();
            foreach ($cartitems_total as $prod) {
                $total += $prod->products->P_Price * $prod->Pro_Qty;
                $otype = $prod->Order_Type;
            }

            $date = Carbon::now();
            $time = $req->input('pickup');
            $combinedDT = date('Y-m-d H:i:s', strtotime("$date $time"));

            $order->DateTime = $combinedDT;
            $order->O_Type = $otype;
            $order->O_Total_Price = $total;
            $order->save();

            $logs = new Logs;
            $logs->Cust_Id = Auth::id();
            $logs->Log_Module = $req->input('Log_Module');
            $logs->Log_Pay_Type = 0;
            $logs->Log_Status = $req->input('Log_Status');
            $logs->created_at = Carbon::now();
            $logs->updated_at = Carbon::now();

            $cartitems = Cart::where('Cust_Id', Auth::id())->get();
            foreach ($cartitems as $item) {
                OrderProduct::create([
                    'Order_Id' => $order->id,
                    'P_Id' => $item->Pro_Id,
                    'Order_Quantity' => $item->Pro_Qty,
                    'Order_Price' => $item->products->P_Price * $item->Pro_Qty,
                ]);
            }
            $cartitems = Cart::where('Cust_Id', Auth::id())->get();
            Cart::destroy($cartitems);

            return view('checkout_complete');
        }
        elseif(Cart::where('Order_Type'== 'delivery')){
            $order = new Order();
            $order->User_Id = Auth::id();
            $order->O_Name = $req->input('O_Name');
            $order->O_Email = $req->input('O_Email');
            $order->O_Street_1 = $req->input('O_Street_1');
            $order->O_Postcode = $req->input('O_Postcode');
            $order->O_City = $req->input('O_City');
            $order->O_State = $req->input('O_State');
            $order->O_Phone = $req->input('O_Phone');
            $order->O_Notes = $req->input('O_Notes');
            $order->O_Payment = $req->payment;
            $order->Tracking_No = rand(1000, 9999);
            $order->Remarks = $req->input('Remarks');

            $total = 0;
            $cartitems_total = Cart::where('Cust_Id', Auth::id())->get();
            foreach ($cartitems_total as $prod) {
                $total += $prod->products->P_Price * $prod->Pro_Qty;
                $otype = $prod->Order_Type;
            }

            $date=$req->ddate;
            $time=$req->dtime;
            $combinedDT = date('Y-m-d H:i:s', strtotime("$date $time"));

            $order->O_Type = $otype;
            $order->DateTime = $combinedDT;
            $order->O_Total_Price = $total;
            $order->save();

            $logs = new Logs;
            $logs->Cust_Id = Auth::id();
            $logs->Log_Module = $req->input('Log_Module');
            $logs->Log_Pay_Type = 0;
            $logs->Log_Status = $req->input('Log_Status');
            $logs->created_at = Carbon::now();
            $logs->updated_at = Carbon::now();

            $cartitems = Cart::where('Cust_Id', Auth::id())->get();
            foreach ($cartitems as $item) {
                OrderProduct::create([
                    'Order_Id' => $order->id,
                    'P_Id' => $item->Pro_Id,
                    'Order_Quantity' => $item->Pro_Qty,
                    'Order_Price' => $item->products->P_Price * $item->Pro_Qty,
                ]);
            }
            $cartitems = Cart::where('Cust_Id', Auth::id())->get();
            Cart::destroy($cartitems);

            return view('checkout_complete');
        }
        else{
            return view('order_type');
        }
    }
    public function summary($id)
    {
        $summary = Order::where('User_Id', Auth::id())->get();
        return view('orderplace', compact('summary'));
    }
    public function stripePay(Request $req)
    {
        if ($req->type === 'charge.suceeded') {
            try {
                $order = new Order();
                $order->User_Id = Auth::id();
                $order->O_Name = $req->input('O_Name');
                $order->O_Email = $req->input('O_Email');
                $order->O_Street_1 = $req->input('O_Street_1');
                $order->O_Postcode = $req->input('O_Postcode');
                $order->O_City = $req->input('O_City');
                $order->O_State = $req->input('O_State');
                $order->O_Phone = $req->input('O_Phone');
                $order->O_Payment = $req->payment;
                $order->Tracking_No = rand(1000, 9999);
                $order->Remarks->input('reject');

                $logs = new Logs;
                $logs->Cust_Id = Auth::id();
                $logs->Log_Module = $req->input('Log_Module');
                $logs->Log_Pay_Type = 1;
                $logs->Log_Status = $req->input('Log_Status');
                $logs->created_at = Carbon::now();
                $logs->updated_at = Carbon::now();

                $total = 0;
                $cartitems_total = Cart::where('Cust_Id', Auth::id())->get();
                foreach ($cartitems_total as $prod) {
                    $total += $prod->products->P_Price * $prod->Pro_Qty;
                }

                $order->O_Total_Price = $total;
                $logs->Log_Total_Price = $total;
                $order->save();
                $logs->save();

                $cartitems = Cart::where('Cust_Id', Auth::id())->get();
                foreach ($cartitems as $item) {
                    OrderProduct::create([
                        'Order_Id' => $order->id,
                        'P_Id' => $item->Pro_Id,
                        'Order_Quantity' => $item->Pro_Qty,
                        'Order_Price' => $item->products->P_Price * $item->Pro_Qty,
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
