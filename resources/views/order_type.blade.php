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
                    <form method = "GET" action="/ordertype">
                    @csrf
                    <div class="service-btn">
                        <a class="btn custom-btn disabled" name="otype" value="dineIn" href="/catalogue">Dine In</a>
                        <a class="btn custom-btn disabled" name="otype" value="booking" href="table_datetime">Book Table</a>
                        <a class="btn custom-btn" value="takeAway" name="otype" href="/catalogue">Take Away</a>
                        <a class="btn custom-btn" value="delivery" name="otype" href="catalogue">Delivery</a>
                    </div>
                    </form>
                @elseif($shop->Delivery =='0')
                    <form method = "GET" action="/ordertype">
                    @csrf
                    <div class="service-btn">
                        <a class="btn custom-btn" name="otype" value="dineIn" href="catalogue">Dine In</a>
                        <a class="btn custom-btn" name="otype" value="booking" href="table_datetime">Book Table</a>
                        <a class="btn custom-btn" name="otype" value="takeAway" href="catalogue">Take Away</a>
                        <a class="btn custom-btn disabled" name="otype" value="delivery" href="catalogue">Delivery</a>
                    </div>
                    </form>
                @elseif($shop->Pick_Up =='0')
                    <form method = "GET" action="/ordertype">
                    @csrf
                    <div class="service-btn">
                        <a class="btn custom-btn" value="dineIn" name="otype" href="catalogue">Dine In</a>
                        <a class="btn custom-btn" value="booking" name="otype" href="table_datetime">Book Table</a>
                        <a class="btn custom-btn disabled" value="takeAway" name="otype" href="catalogue">Take Away</a>
                        <a class="btn custom-btn" value="delivery" name="otype" href="catalogue">Delivery</a>
                    </div>
                    </form>
                @else
                    <form method = "GET" action="/catalogue">
                    @csrf
                    <div class="service-btn">
                        <a href="catalogue"><button type="submit" name="otype" value="dineIn" class="btn custom-btn">Dine In</button></a>
                        <a href="catalogue"><button type="submit" name="otype" value="pickup" class="btn custom-btn">Pickup</button></a>
                        <a href="catalogue"><button type="submit" name="otype" value="delivery" class="btn custom-btn">Delivery</button></a>
                    </div>
                    </form>

                    <form method = "GET" action="/booking">
                    @csrf
                    <div class="service-btn">
                        <a href="booking"><button type="submit" name="otype" value="booking" class="btn custom-btn">Booking</button></a>
                    </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection