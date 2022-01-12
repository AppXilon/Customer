@extends('master')
@section('content')
        
    <!-- Service Start -->
    <div class="service">
        <div class="shop-info">
            <div class="shop-text">
                <h3>{{$shop->S_Name}} <span>Information</span></h3>
                <p>Business Hour: <span>9.00am until 9.00pm</span></p>
                <p>{{$shop->S_Description}}</p>
            </div>
        </div>
        <div class="service-item">
            <div class="service-text">
                <h1><span>Choose Order Type</span></h1>
                @if($shop->Dine_In =='0')
                    <div class="service-btn">
                        <a class="btn custom-btn disabled" href="/catalogue">Dine In</a>
                        <a class="btn custom-btn disabled" href="table_datetime">Book Table</a>
                        <a class="btn custom-btn" href="/catalogue">Take Away</a>
                        <a class="btn custom-btn" href="catalogue">Delivery</a>
                    </div>
                @elseif($shop->Delivery =='0')
                    <div class="service-btn">
                        <a class="btn custom-btn" href="catalogue">Dine In</a>
                        <a class="btn custom-btn" href="table_datetime">Book Table</a>
                        <a class="btn custom-btn" href="catalogue">Take Away</a>
                        <a class="btn custom-btn disabled" href="catalogue">Delivery</a>
                    </div>
                @elseif($shop->Pick_Up =='0')
                    <div class="service-btn">
                        <a class="btn custom-btn" href="catalogue">Dine In</a>
                        <a class="btn custom-btn" href="table_datetime">Book Table</a>
                        <a class="btn custom-btn disabled" href="catalogue">Take Away</a>
                        <a class="btn custom-btn" href="catalogue">Delivery</a>
                    </div>
                @else
                    <div class="service-btn">
                        <a class="btn custom-btn" href="catalogue">Dine In</a>
                        <a class="btn custom-btn" href="table_datetime">Book Table</a>
                        <a class="btn custom-btn" href="catalogue">Take Away</a>
                        <a class="btn custom-btn" href="catalogue">Delivery</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection