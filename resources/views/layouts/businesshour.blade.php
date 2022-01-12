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
                            <h4 class="page-title pull-left">Business Hour</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.html">Home</a></li>
                                <li><span>Businesshour</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Salim Kasim<i class="fa fa-angle-down"></i></h4>
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
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                
                                <h4 class="header-title">Business Hours</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">Day</th>
                                                    <th scope="col">Start Time</th>
                                                    <th scope="col">End Time</th>
                                                    <th scope="col">is Day off?</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($businesshour as $businesshour)
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><br>{{$businesshour->Day_Of_Week}}</th>
                                                    <td><div class="form-group">
                                                        <input class="form-control" type="time" value={{ $businesshour->Start_Time}} name="Start_Time" onclick="return false;"></div>
                                                    </td>
                                                    <td><div class="form-group">
                                                        <input class="form-control" type="time" value={{$businesshour->End_Time}} name="End_Time" onclick="return false;"></div>
                                                    </td>
                                                    <td>
                                                        @if ($businesshour->Status == '1')
                                                            <label class="switch">
                                                                <input type="checkbox" checked onclick="return false;">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        @else
                                                            <label class="switch">
                                                                <input type="checkbox" onclick="return false;">
                                                                <span class="slider round"></span>
                                                        @endif
                                                    </td>
                                                      <td> <a class="btn btn-primary"
                                                        href="{{ route('businesshour.edit', $businesshour->Day_Id) }}">Edit</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
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