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
                                <input type="button" id="myBtn" value="Update" class="button1">
                        </div>
                            <div class="team">
                                <div class="container">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="team-item">
                                                <div class="team-img">
                                                    <img src="assets/images/table/table 1.png" alt="Image">
                                                    <button class="btn" id="myBtn">Table 1</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="team-item">
                                                <div class="team-img">
                                                    <img src="assets/images/table/table 1.png" alt="Image">
                                                    <button class="btn" id="myBtn">Table 2</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="team-item">
                                                <div class="team-img">
                                                    <img src="assets/images/table/table 1.png" alt="Image">
                                                    <button class="btn" id="myBtn">Table 3</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="team-item">
                                                <div class="team-img">
                                                    <img src="assets/images/table/table 1.png" alt="Image">
                                                    <button class="btn" id="myBtn">Table 4</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="team-item">
                                                <div class="team-img">
                                                    <img src="assets/images/table/table 2.png" alt="Image">
                                                    <button class="btn" id="myBtn">Table 5</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="team-item">
                                                <div class="team-img">
                                                    <img src="assets/images/table/table 2.png" alt="Image">
                                                    <button class="btn" id="myBtn">Table 6</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="team-item">
                                                <div class="team-img">
                                                    <img src="assets/images/table/table 3.png" alt="Image">
                                                    <button class="btn" id="myBtn">Table 7</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="team-item">
                                                <div class="team-img">
                                                    <img src="assets/images/table/table 3.png" alt="Image">
                                                    <button class="btn" id="myBtn">Table 8</button>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Team End -->
                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Update Criteria</h4>
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationCustomUsername"
                                                        placeholder="Table Name" aria-describedby="inputGroupPrepend" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationCustomUsername"
                                                        placeholder="Table Pax" aria-describedby="inputGroupPrepend" required="">
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-success mb-3"
                                                style="float: right;">Update</button>
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