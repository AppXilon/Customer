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
                <li>Checkout Complete</li>
                <li>Order Status</li>
            </ul>
        </div>
        <div class="summary-item">
            <div class="col-25">
                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="container">
                        <h4>Summary <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i><b></b></span></h4>
                        <hr>
                            <p>Name: <span class="price" name="cname" style="color:black"><b>{{$name}}</b></span></p>
                            <p>Email: <span class="price" name="cemail" style="color:black"><b>{{$email}}</b></span></p>
                            <p>Address: <span class="price" name="caddress" style="color:black"><b>{{$address}}</b></span></p>
                            <p>Phone Number: <span class="price" name="cphone" style="color:black"><b>{{$phone}}</b></span></p>
                        <hr>
                        @php $totalPrice = 0; @endphp
                        @foreach($product as $item)

                            <p>{{$item->Pro_Qty}} X<a href="detail/{{$item->id}}">{{$item->P_Name}}</a> <span class="price">{{$item->P_Price}}</span></p>
                        @php $totalPrice += $item->P_Price * $item->Pro_Qty; @endphp
                        @endforeach
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
                </form>
            
            </div>
        </div>
    </div>
</div>
<!-- Shipping Address End -->

@endsection

@section('scripts')
    <script src="https://www.paypal.com/sdk/js?client-id=AZuiCy2XaqC48YxFzFbrritDd3NfnXi4z5p9B1pOYJPn9ElJ13kBebO7El5aLU0He7Q17sb3GPs301YM"> </script>

    <script>
    paypal.Buttons({
        createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
            purchase_units: [{
            amount: {
                value: '{{$totalPrice}}'
            }
            }]
        });
        },
        onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
            // This function shows a transaction success message to your buyer.
            // alert('Transaction completed by ' + details.payer.name.given_name);

            $.ajax({
                method: "POST",
                url: "/orderPlace",
                data: {
                    'payment': "Paid by PayPal",
                },
                success: function (response) {
                    swal(response.status);
                    window.location.href = "/checkout_complete";         
                }
            });
        });
        }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
    </script>

@endsection
