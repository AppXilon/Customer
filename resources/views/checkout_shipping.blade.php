@extends('master')
@section('content')

<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>
<script src="https://js.stripe.com/v3/"></script>

<?php

require_once __DIR__.'/../../../vendor/autoload.php';

?>

<!-- Shipping Address Start -->
<div class="checkout">
    <div class="container">
        <div class="section-header text-center">
            <h2>Checkout Item</h2>
        </div>
        <div class="process-checkout">
            <ul class="progressbar">
                <li class="active">Login</li>
                <li>Shipping and Billing</li>
                <li>Checkout Complete</li>
                <li>Order Status</li>
            </ul>
        </div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="shipping-address mt-5">
                <div id="delivery" class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>Customer Details</h4>
                        </div>
                    </div>
                    <div class="address-item">
                        <form>
                            @csrf
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" class="form-control cname" value="{{Auth::user()->name}}" name="O_Name" placeholder="Enter Name" required="required">
                                <span id="cname_error" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Email address</label>
                                <input type="text" class="form-control cemail" value="{{Auth::user()->email}}" name="O_Email" placeholder="Enter Email" required="required">
                                <span id="cemail_error" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control cphone" value="{{Auth::user()->phone}}" name="O_Phone" placeholder="Enter Phone Number" required="required">
                                <span id="cphone_error" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Street No</label>
                                <input type="text" class="form-control cstreet" value="{{Auth::user()->street_1}}" name="O_Street_1" placeholder="Enter Street" required="required">
                                <span id="cstreet_error" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Postcode</label>
                                <input type="text" class="form-control cpostcode" value="{{Auth::user()->postcode}}" name="O_Postcode" placeholder="Enter Postcode" required="required">
                                <span id="cpostcode_error" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">City</label>
                                <input type="text" class="form-control ccity" value="{{Auth::user()->city}}" name="O_City" placeholder="Enter City" required="required">
                                <span id="ccity_error" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">State</label>
                                <input type="text" class="form-control cstate" value="{{Auth::user()->state}}" name="O_State" placeholder="Enter State" required="required">
                                <span id="cstate_error" class="text-danger"></span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>Order Details</h4>
                            <hr>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Quantity</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $totalPrice = 0; @endphp
                                    @foreach($cartitems as $item)
                                    <tr>
                                        <td>{{$item->Pro_Qty}} </td>
                                        <td><a href="detail/{{$item->id}}">{{$item->products->P_Name}}</a></td>
                                        <td>RM{{ number_format((float) $item->products->P_Price*$item->Pro_Qty, 2, '.', '') }}</td>
                                    </tr>
                                    @php $totalPrice += $item->products->P_Price*$item->Pro_Qty; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            Notes: <input type="text" class="form-control notes" value="{{$notes}}" name="O_Notes" placeholder="Enter Notes" required="required">
                            <h5>Total Price: RM{{ number_format((float) $totalPrice, 2, '.', '') }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4>Payment Options</h4>
                            <hr>
                            <div class="payment-option">
                                <button type="submit" name="payment" value="Cash" class="btn btn-success w-100 mt-3">Pay with Cash</button>
                                <!-- <button type="submit" name="payment" value="Stripe" class="btn btn-success w-100 mt-3 razorpay_btn">Pay with Stripe</button> -->
                                <a class="btn btn-primary w-100 mt-3" href="{{ route('processTransaction') }}">PayPal Payment</a>
                                @if(\Session::has('error'))
                                <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                                {{ \Session::forget('error') }}
                                @endif
                                @if(\Session::has('success'))
                                <div class="alert alert-success">{{ \Session::get('success') }}</div>
                                {{ \Session::forget('success') }}
                                @endif
                                <button id="stripe-checkout" name="payment" value="Stripe" class="btn btn-success w-100 mt-3">Pay with Stripe</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Shipping Address End -->

<?php
\Stripe\Stripe::setApiKey('sk_test_51KHHOyEL224hnqnlZYzGWFqurcYpg8dcajbhqSipQgB8XfwBVy7sv0ZwtoaHlj93yF6tZDpbXPb2X1eNMBkHejhV00o3yVsImu');

$session = \Stripe\Checkout\Session::create([
    'line_items' => [[
      'price_data' => [
        'currency' => 'myr',
        'product_data' => [
          'name' => 'T-shirt',
        ],
        'unit_amount' => 2000,
      ],
      'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'https://example.com/success',
    'cancel_url' => 'https://example.com/cancel',
  ]);

?>

@endsection


@section('scripts')
<script>
const stripe = Stripe('pk_test_51KHHOyEL224hnqnlcij1l50AfvVQYkaLSDaheOu9qreC13JYqWeEL6u27qwBeaiVTMahXJ39lq3LSXbyrbibqLBf00t6wBOtpU')
const btn = document.getElementById("stripe-checkout")
btn.addEventListener('click', function(e){
    e.preventDefault();
    stripe.redirectToCheckout({
        sessionId: "<?php echo $session->id ?>"
    })
})
</script>
@endsection