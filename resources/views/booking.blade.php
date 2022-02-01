@extends('master')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Book A Table</h2>
                </div>
                <div class="col-12">
                    <a href="index.html">Home</a>
                    <a href="booking.html">Booking</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Booking Start -->
    <div class="booking">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="booking-content">
                        <div class="section-header">
                            <p>Book A Table {{ $order }}</p>
                            <h2>Book Your Table For Private Dinners & Happy Hours</h2>
                        </div>
                        @foreach ($img as $img)
                            <div class="menu-img">
                                <img src="{{ asset('images/' . $img->S_Table) }}" alt="Image">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="booking-form">
                        <form method="GET" action="/catalogueBooking">
                            <div class="control-group">
                                <div class="input-group date" id="date" data-target-input="nearest">
                                    <input type="text" name="bookdate" value="bookdate" id="dropDown"
                                        class="form-control datetimepicker-input" placeholder="Date" data-target="#date"
                                        data-toggle="datetimepicker" />
                                    <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="input-group">
                                    <select name="booktime" id="time" class="custom-select form-control">
                                        <option selected>Book Time</option>
                                        <option value="0900">0900</option>
                                        <option value="1000">1000</option>
                                        <option value="1100">1100</option>
                                        <option value="1200">1200</option>
                                        <option value="1300">1300</option>
                                        <option value="1400">1400</option>
                                        <option value="1500">1500</option>
                                        <option value="1600">1600</option>
                                        <option value="1700">1700</option>
                                        <option value="1800">1800</option>
                                        <option value="1900">1900</option>
                                        <option value="2000">2000</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group">
                                    <select name="bookpax" id="pax" class="custom-select form-control">
                                        <option selected>Pax</option>
                                        <option value="1">1 pax</option>
                                        <option value="2">2 pax</option>
                                        <option value="3">3 pax</option>
                                        <option value="4">4 pax</option>
                                        <option value="5">5 pax</option>
                                        <option value="6">6 pax</option>
                                        <option value="7">7 pax</option>
                                        <option value="8">8 pax</option>
                                        <option value="8">9 pax</option>
                                        <option value="8">10 pax</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group">
                                    <select name="booktable" id="table" class="custom-select form-control">
                                        <option selected>Select Table</option>
                                        @foreach ($table as $table)
                                            @if ($table->T_Status == '1')
                                                <option value="{{ $table->T_Id }}">{{ $table->T_Id }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                    </div>
                                </div>
                            </div>                          
                            <div>
                                <input type="hidden" id="otype" name="otype" value="{{ $order }}">
                                <a href="catalogue"><button type="submit" class="btn custom-btn">Choose Menu</button></a>
                            </div>
                            <div class="control-group">
                                <div class="input-group mt-5">
                                    @if (Session::get('fail'))
                                        <div class="alert alert-danger" style="text-align:center;">
                                            {{ Session::get('fail') }}
                                        </div>
                                    @endif
                                    @if (Session::get('faildate'))
                                    <div class="alert alert-danger" style="text-align:center;">
                                        {{ Session::get('faildate') }}
                                    </div>
                                @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Booking End -->
@endsection
