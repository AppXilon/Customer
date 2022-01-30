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
                                <p>Book A Table {{$order}}</p>
                                <h2>Book Your Table For Private Dinners & Happy Hours</h2>
                            </div>
                            @foreach ($img as $img)
                            <div class="menu-img">
                                <img src="{{asset('images/'. $img->S_Table)}}" alt="Image">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="booking-form">
                        <form method="GET" action="/catalogue">
                            <div  class="control-group" >
                                <div class="input-group date" id="date" data-target-input="nearest" >
                                    <input type="text" name="bookdate" value="bookdate" id="dropDown" class="form-control datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker"/>
                                    <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group time" id="time" data-target-input="nearest">
                                    <input type="text" name="booktime" value="booktime" id="time" class="form-control datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker"/>
                                    <div class="input-group-append" data-target="#time" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group">
                                    <select name="bookpax" class="custom-select form-control">
                                        <option selected>Pax</option>
                                        <option value="1">1 Pax</option>
                                        <option value="2">2 Pax</option>
                                        <option value="3">3 Pax</option>
                                        <option value="4">4 Pax</option>
                                        <option value="5">5 Pax</option>
                                        <option value="6">6 Pax</option>
                                        <option value="7">7 Pax</option>
                                        <option value="8">8 Pax</option>
                                        <option value="9">9 Pax</option>
                                        <option value="10">10 Pax</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group">
                                    <select name="booktable" class="custom-select form-control">
                                        <option selected>Select Table</option>
                                        @foreach ($table as $table)
                                        @if($table->T_Status == '1')
                                        <option value="{{$table->T_Id}}">{{$table->T_Id}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="hidden" id="otype" name="otype" value="{{$order}}">
                                <a href="catalogue"><button type="submit" class="btn custom-btn">Choose Menu</button></a>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
@endsection

@section('scripts')

{{-- <script>
    $("#hr option").each(function() {
        if (hour > $(this).val())
            $(this).prop("disabled", true);

    });
</script> --}}

@endsection