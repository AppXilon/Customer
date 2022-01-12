<?php include('include/header.php'); ?>

<body>
    
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php include('include/sidebar.php'); ?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <?php include('include/header_area.php'); ?>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"> Sales Report</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Sales Report</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Salim Selamat <i class="fa fa-angle-down"></i></h4>
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
            <div class="main-content-inner">
                <div class="row">
                    <!-- Dark table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Order</h4>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer Name</th>
                                                <th>Payment Method</th>
                                                <th>Order Method</th>
                                                <th>Order Date</th>
                                                <th>Total Payments</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>001</td>
                                                <td>Ali bin Hassan</td>
                                                
                                                <td>PayPal</td>
                                                <td>Dine-In</td>
                                                <td>2020/11/28</td>
                                                <td>RM40.90</td>
                                            </tr>
                                            <tr>
                                                <td>002</td>
                                                <td>Abu bin Hassan</td>
                                                
                                                <td>PayPal</td>
                                                <td>Booking</td>
                                                <td>2020/11/29</td>
                                                <td>RM80.00</td>
                                            </tr>
                                            <tr>
                                                <td>003</td>
                                                <td>Najiha bin Alif</td>
                                                
                                                <td>Online Banking</td>
                                                <td>Booking</td>
                                                <td>2020/11/29</td>
                                                <td>RM50.50</td>
                                            </tr>
                                            <tr>
                                                <td>004</td>
                                                <td>Mashitah bin Hasiff</td>
                                                
                                                <td>Online Banking</td>
                                                <td>Take Away</td>
                                                <td>2020/11/29</td>
                                                <td>RM48.00</td>
                                            </tr>
                                            <tr>
                                                <td>005</td>
                                                <td>Aiman bin Hanif</td>
                                                
                                                <td>PayPal</td>
                                                <td>Booking</td>
                                                <td>2020/12/8</td>
                                                <td>RM78.00</td>
                                            </tr>
                                            <tr>
                                                <td>006</td>
                                                <td>Aqilah binti Othman</td>
                                                
                                                <td>Touch N Go E-wallet</td>
                                                <td>Booking</td>
                                                <td>2020/12/8</td>
                                                <td>RM89.00</td>
                                            </tr>
                                            <tr>
                                                <td>007</td>
                                                <td>Dalilati Dayana binti Ahmad</td>
                                                
                                                <td>PayPal</td>
                                                <td>Booking</td>
                                                <td>2020/12/9</td>
                                                <td>RM82.00</td>
                                            </tr>
                                            <tr>
                                                <td>008</td>
                                                <td>Hanie Izzatie binti Salman</td>
                                                
                                                <td>Online Banking</td>
                                                <td>Booking</td>
                                                <td>2020/12/10</td>
                                                <td>RM29.00</td>
                                            </tr>
                                            <tr>
                                                <td>009</td>
                                                <td>Ain Izzati binti Alif</td>
                                                
                                                <td>PayPal</td>
                                                <td>Booking</td>
                                                <td>2020/12/11</td>
                                                <td>RM80.00</td>
                                            </tr>
                                            <tr>
                                                <td>010</td>
                                                <td>Siti Hajar binti Abu Dzar</td>
                                                
                                                <td>PayPal</td>
                                                <td>Booking</td>
                                                <td>2020/12/12</td>
                                                <td>RM80.00</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <?php include('include/footer.php'); ?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <?php include('include/offset.php'); ?>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>