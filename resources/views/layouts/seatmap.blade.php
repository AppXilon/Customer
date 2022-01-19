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
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Salim Kasim<i
                                    class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <!-- *************************************************************************************************************************-->

            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="section-header text-center">
                                    <h2>Restaurant's Layout</h2>
                                    <button type="button" data-toggle="modal" data-target="#createSeat"
                                        class="button1">Add Seat
                                    </button>
                                    <button type="button" data-toggle="modal" data-target="#editSeatMap"
                                        class="button1">
                                        Update Seat Map
                                    </button>
                                </div>
                            </div>
                            <div class="card">
                                <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                            href="#pills-home" role="tab" aria-controls="pills-home"
                                            aria-selected="true">Seat Map</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                            href="#pills-profile" role="tab" aria-controls="pills-profile"
                                            aria-selected="false">Seat Adjustment</a>
                                    </li>
                                </ul>
                                <div class="card-body" style="background-color: #F7F7F7;">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="nav-home-tab">
                                            @foreach ($seatmap as $map)
                                                <img src="{{ asset('images/' . $map->S_Table) }}" class="seatmap">
                                            @endforeach
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab">
                                            <table id="dataTable" class="table text-center" >
                                                <thead class="text-uppercase bg-primary">
                                                    <tr class="text-white">
                                                        <th scope="col">Table Number</th>
                                                        <th scope="col">Table Pax</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                @foreach ($table as $seat)
                                                    <tbody>
                                                        <td>{{ $seat->T_Id }}</td>
                                                        <td>{{ $seat->T_Pax }}</td>
                                                        <td>
                                                            <form action="{{ route('seatmap.destroy', $seat->T_Id) }}"
                                                                method="POST">
                                                                <a class="btn btn-primary"
                                                                    href="{{ route('seatmap.edit', $seat->T_Id) }}">Edit</a>
    
                                                                @csrf
                                                                @method('DELETE')
    
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </td>
    
                                                    </tbody>
                                                @endforeach
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- table primary start -->
                    @foreach ($seatmap as $seat)
                    @include('layouts.modal.editMap')
                    @include('layouts.modal.createSeat')
                    @endforeach

                    @foreach ($table as $tables)
                    @include('layouts.modal.editSeat')
                    @endforeach

                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- *************************************************************************************************************************-->
        <!-- Modal -->




        <!--endModal-->


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
