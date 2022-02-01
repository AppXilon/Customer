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
                <a href="/">Home</a>
                <a href="booking">Booking</a>
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
                        <p>Book A Table</p>
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
                        
                        <div class="control-group">
                            <div class="input-group date" id="date" data-target-input="nearest">
                                <input type="text" name="bookdate" value="bookdate" id="dropDown" class="form-control datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker" />
                                <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="input-group">
                                <select name="booktime" class="custom-select form-control">
                                    <option selected>Book Time</option>
                                    <option value="09:00">0900</option>
                                    <option value="10:00">1000</option>
                                    <option value="11:00">1100</option>
                                    <option value="12:00">1200</option>
                                    <option value="13:00">1300</option>
                                    <option value="14:00">1400</option>
                                    <option value="15:00">1500</option>
                                    <option value="16:00">1600</option>
                                    <option value="17:00">1700</option>
                                    <option value="18:00">1800</option>
                                    <option value="19:00">1900</option>
                                    <option value="20:00">2000</option>
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="input-group">
                                <select name="booktable" class="custom-select form-control">
                                    <option>Choose Table No</option>
                                    @foreach ($table as $tables)
                                    @if($tables->T_Status == '1')
                                    <option value="{{$tables->T_Id}}">{{$tables->T_Id}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                </div>
                            </div>
                            <div class="{{$tables->T_Id}} box">Max No of people is <strong>{{$tables->T_Pax}}</strong> people only</div>

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
<!-- Booking End -->
@endsection
</div>
<!-- Booking End -->
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $("select").change(function() {
            $(this).find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box").hide();
                }
            });
        }).change();
    });
</script>
@endsection
