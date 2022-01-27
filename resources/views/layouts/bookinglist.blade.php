@php use Carbon\Carbon; @endphp

@include('include.header')

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        @include('include.sidebar')
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">

            <!-- header area start -->
            @include('include.header_area')
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Seat Map</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.html">Home</a></li>
                                <li><span>Seat Map</span></li>
                            </ul>
                        </div>
                    </div>
                    @include('include.managerBar')
                </div>
            </div>
            <!-- page title area end -->

            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="col-md-4">
                                <form action="/search" method="get">
                                    <div class="input-group">
                                        <input type="search" name="search" placeholder="Search..."
                                            style="margin-left: 15px; margin-top: 25px;" class="form-control">
                                        <span class="input-group-prepend"><button type="submit" class="btn btn-primary"
                                                style=" margin-top: 25px;"><i
                                                    class="ti-search"></i></button></span>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <h4 class="header-title">Booking List</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Contact No.</th>
                                                    <th scope="col">Table No.</th>
                                                    <th scope="col">Table Pax</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $list = App\Models\Order::where('O_Type', 'booking')
                                                    ->where('O_Status', 1)
                                                    ->get();
                                            @endphp
                                            @foreach ($list as $bookings)
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            @php
                                                                $date = Carbon::parse($bookings->Datetime)->format('d-m-Y');
                                                                echo $date;
                                                            @endphp</td>
                                                         <td>
                                                            @php
                                                                $time = Carbon::parse($bookings->Datetime)->format('H:i:s');
                                                                echo $time;
                                                            @endphp</td>
                                                        <td>{{ $bookings->O_Name }}</td>
                                                        <td>{{ $bookings->O_Phone }}</td>
                                                        <td>{{ $bookings->T_Id }}</td>
                                                        <td>{{ $bookings->T_Pax }}</td>
                                                        <td> <button type="button" class="btn btn-success"
                                                                data-toggle="modal"
                                                                data-target="#viewBooking{{ $bookings->id }}">
                                                                View Order
                                                            </button></td>
                                                    </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @foreach ($booking as $Booking)
                                @include('layouts.modal.viewBooking')
                            @endforeach
                        </div>
                    </div>
                    <!-- table primary start -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- *************************************************************************************************************************-->


        <!-- footer area start-->
        @include('include.footer')

        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>


    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
