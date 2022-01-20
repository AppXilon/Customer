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
                       
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="search-box pull-left">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search..." style="margin: 25px;"
                                        required>
                                </form>
                            </div>
                            <div class="card-body">
                                <h4 class="header-title">Booking List</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table">
                                           <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">Date Time</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Contact No.</th>
                                                    <th scope="col">Table No.</th>
                                                    <th scope="col">Table Pax</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($booking as $booking)
                                            <tbody>
                                                <tr>
                                                    <th>{{$booking->Datetime}}</th>
                                                    <td>{{ $booking->O_Name}}</td>
                                                    <td>{{$booking->O_Phone}}</td>
                                                    <td>{{$booking->T_Id}}</td>
                                                    <td>{{$booking->T_Pax}}</td>
                                                      <td> <a class="btn btn-primary"
                                                        href="">Edit</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>    
                            </div>
                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Booking Details</h4>
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Product Name"
                                                    id="example-text-input">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">RM</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="validationCustomUsername"
                                                        placeholder="0.00" aria-describedby="inputGroupPrepend" required="">
                                                </div>
                                            </div>
    
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationCustomUsername"
                                                        placeholder="00" aria-describedby="inputGroupPrepend" required="">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">Minutes</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                    <label class="custom-file-label" for="inputGroupFile02">Choose
                                                        Image</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Availability</label>
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
    
                                            <label for="example-text-input" class="col-form-label">Category</label>
                                            <button class="btn btn-light dropdown-toggle" type="button"
                                                data-toggle="dropdown">
                                                Select One
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Breakfast</a>
                                                <a class="dropdown-item" href="#">Lunch</a>
                                                <a class="dropdown-item" href="#">Dinner</a>
                                            </div>
                                            <button type="button" class="btn btn-success mb-3"
                                                style="float: right;">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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