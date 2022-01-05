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
                <li>Shipping and Billing</li>
                <li>Checkout Complete</li>
                <li>Order Status</li>
            </ul>
        </div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="shipping-address mt-5"> 
                <div class="col-md-6">
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
                                <input type="text" class="form-control cname" value= "{{Auth::user()->name}}" name= "O_Name" placeholder="Enter Name" required="required">
                                <span id="cname_error" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Email address</label>
                                <input type="text" class="form-control cemail" value= "{{Auth::user()->email}}" name= "O_Email" placeholder="Enter Email" required="required">
                                <span id="cemail_error" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control cphone" value= "{{Auth::user()->phone}}" name= "O_Phone" placeholder="Enter Phone Number" required="required">
                                <span id="cphone_error" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Street No</label>
                                <input type="text" class="form-control cstreet" value= "{{Auth::user()->street_1}}" name= "O_Street_1" placeholder="Enter Street" required="required">
                                <span id="cstreet_error" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Postcode</label>
                                <input type="text" class="form-control cpostcode" value= "{{Auth::user()->postcode}}" name= "O_Postcode" placeholder="Enter Postcode" required="required">
                                <span id="cpostcode_error" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">City</label>
                                <input type="text" class="form-control ccity" value= "{{Auth::user()->city}}" name= "O_City" placeholder="Enter City" required="required">
                                <span id="ccity_error" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">State</label>
                                <input type="text" class="form-control cstate" value= "{{Auth::user()->state}}" name= "O_State" placeholder="Enter State" required="required">
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
                                    @php $totalPay = 0; @endphp
                                    @foreach($cartitems as $item)
                                    <tr>
                                        <td>{{$item->Pro_Qty}} </td>
                                        <td><a href="detail/{{$item->id}}">{{$item->products->P_Name}}</a></td>
                                        <td>{{$item->products->P_Price*$item->Pro_Qty}}</td>
                                    </tr>
                                    @php $totalPrice += $item->products->P_Price*$item->Pro_Qty; @endphp
                                    @php $totalPay += $totalPrice/4; @endphp
                                    @endforeach
                                </tbody>   
                            </table>
                            <h5>Total Price: {{$totalPrice}}</h5>
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
                                <button type="submit" name="payment" value="Razor" class="btn btn-primary w-100 mt-3 razorpay_btn">Pay with Razorpay</button>
                                <div id="paypal-button-container" class="paypal"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
                value: '{{$totalPay}}'
            }
            }]
        });
        },
        onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
            // This function shows a transaction success message to your buyer.
            alert('Transaction completed by ' + details.payer.name.given_name);

            var cname = $('.cname').val(); 
            var cemail = $('.cemail').val(); 
            var cphone = $('.cphone').val();
            var cstreet = $('.cstreet').val(); 
            var cpostcode = $('.cpostcode').val();
            var ccity = $('.ccity').val();
            var cstate = $('.cstate').val();

            $.ajax({
                method: "POST",
                url: "/orderplace",
                data: {
                    'O_Name' :cname,
                    'O_Email' :cemail,
                    'O_Phone' :cphone,
                    'O_Street_1' :cstreet,
                    'O_Postcode' :cpostcode,
                    'O_City' :ccity,
                    'O_State' :cstate,
                    'O_Payment' :"Paypal",
                },
                success: function (response) {
                    swal(response.status);
                    window.location.href = "order_history";         
                }
            });
        });
        }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
    </script>

@endsection