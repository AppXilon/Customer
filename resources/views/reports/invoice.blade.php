<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Invoice</title>
    <link rel="shortcut icon" type="image/png" href="https://image.flaticon.com/icons/png/512/64/64431.png" />
    <!-- Bootstrap -->
    <link href="{{ asset('frontend/css/bootstrap3.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


    <div class="row">
        <div class="col-xs-6 text-center">
            <br>
            
        </div>
        <div class="col-xs-6 text-right">
            @php
                $myvalue = $order->created_at;
                
                $datetime = new DateTime($myvalue);
                $Dine_Datetime = $datetime->format('d-m-Y');
                // $time = $datetime->format('H:i');
                
            @endphp
            <h1>INVOICE</h1>
            <h5>Order: {{ $order->Tracking_No }}</h5>
            <h5>Date: {{ $Dine_Datetime }}</h5>

        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>From: Apexs Sdn. Bhd.</h4>
                </div>
                <div class="panel-body">
                    <p>
                        Lot 23 <br>
                        Jalan Reko 2, Taman Saujana <br>
                        43600 Bangi <br>
                        Selangor Darul Ehsan <br>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-5 col-xs-offset-2 text-right">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>To: {{ $order->O_Name }}</h4>

                </div>
                <div class="panel-body">

                    <p>
                        {{ $order->O_Street_1 }}<br>
                        {{ $order->O_Postcode }}, {{ $order->O_City}} <br>
                        {{ $order->O_State }} <br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    @php
        $total = 0;
        $count = 0;
    @endphp

    <table class="table table-striped table-bordered">

        <tr>
            <th>No</th>
            <th>Product</th>
            <th class="text-right">Quantity</th>
            {{-- <th class="text-right">Price(RM)/Unit</th> --}}
            <th class="text-right">Total(RM)</th>
        </tr>

        @foreach ($order->orderitems as $item)
            <tr>
                <td>{{ $count = $count + 1 }}</td>
                <td>{{$item->products->P_Name}}</td>
                <td class="text-right">{{ $item->Order_Quantity }}</td>
                <td class="text-right">RM {{ number_format($item->Order_Price, 2) }}</td>
                {{-- <td class="text-right">RM {{ number_format($item->price * $item->qty, 2) }}</td> --}}

            </tr>
        @endforeach

        <tr>
            <td colspan="4" class="text-right">Grand Total</td>
            <td class="text-right">RM
                {{ number_format($order->Order_Price, 2) }}</td>
        </tr>

    </table>


    <div class="panel-body">
        <center>
            <p>If you have any questions about this invoice, please contact</p>
        </center>
        <center>
            <p>Mr. Ashraf Hafizi, +60104031221 </p>
        </center>
        <p><br></p>
        <center>
            <p>Computer-generated invoice. No signature is required.</p>
        </center>
    </div>


</body>

</html>
