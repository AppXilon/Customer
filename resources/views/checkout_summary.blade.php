@extends('master')
@section('content')

<!-- Shipping Address Start -->
<div class="checkout">
    <div class="container">
        <div class="section-header text-center">
            <h2>Checkout Item</h2>
        </div>
        <div class="process-checkout">
        <ul class="progressbar">
                <li class="active">Login</li>
                <li class="active">Shipping and Billing</li>
                <li class="active">Checkout Complete</li>
                <li>Order Status</li>
            </ul>
        </div>
        <div class="summary-item">
            <div class="col-25">
            @foreach($summary as $item)
                <div class="container">
                    <h4>Summary <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i><b></b></span></h4>
                    <hr>
                        <p>Name: <span class="price" name="cname" style="color:black"><b>nama</b></span></p>
                        <p>Email: <span class="price" name="cemail" style="color:black"><b>emel</b></span></p>
                        <p>Address: <span class="price" name="caddress" style="color:black"><b>alamat</b></span></p>
                        <p>Phone Number: <span class="price" name="cphone" style="color:black"><b>phone</b></span></p>
                    <hr>
                    @php $totalPrice = 0; @endphp
                    

                        <p>{{$item->Pro_Qty}} X<a href="detail/{{$item->id}}">{{$item->products->P_Name}}</a> <span class="price">{{$item->products->P_Price}}</span></p>
                    @php $totalPrice += $item->P_Price * $item->Pro_Qty; @endphp
                    
                        <!-- <p>Subtotal <span class="price" style="color:black"><b>RM sub</b></span></p> -->
                        <!-- <p>Promo Price <span class="price" style="color:black"><b>RM28.00</b></span></p> -->
                        <p>Total <span class="price" style="color:black"><b>RM {{$totalPrice}}</b></span></p>
                </div>
                <div class="payment-option">
                    <hr>
                    <button type="submit" name="payment" value="Cash" class="btn btn-primary w-100 mt-3">Pay with Cash</button>
                    <button type="submit" name="payment" value="Razor" class="btn btn-primary w-100 mt-3 razorpay_btn">Pay with Razor</button>
                    <div id="paypal-button-container" class="paypal"></div>
                </div>
               
            @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Shipping Address End -->

@endsection

