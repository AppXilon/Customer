@include('include.header')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

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
                            <h4 class="page-title pull-left">Ordering Trends</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Ordering Trends</span></li>
                            </ul>
                        </div>
                    </div>
                    @include('include.managerBar')
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">

                    <!-- SALES Statistics area start -->
                    <div class="col-lg-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Sales</h4>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                  
                    </div>
                </div>
                <!-- SALES Statistics area end -->



                <!-- SALES BY CATEGORIES start -->
                <div class="col-lg-12 mt-5">
                    <div class="card h-full">
                        <h5 class="card-header"> Sales By Categories</h5>
                        <div class="card-body p-0">
                            <ul class="traffic-sales list-group list-group-flush">
                                <li class="traffic-sales-content list-group-item "><span
                                        class="traffic-sales-name">Fried Rice</span><span
                                        class="traffic-sales-amount">300 sales <span
                                            class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i
                                                class="fa fa-fw fa-arrow-up"></i></span><span
                                            class="ml-1 text-success">5.86%</span></span>
                                </li>
                                <li class="traffic-sales-content list-group-item"><span
                                        class="traffic-sales-name">Western<span class="traffic-sales-amount">250
                                            sales <span
                                                class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i
                                                    class="fa fa-fw fa-arrow-up"></i></span><span
                                                class="ml-1 text-success">5.86%</span></span>
                                    </span>
                                </li>
                                <li class="traffic-sales-content list-group-item"><span
                                        class="traffic-sales-name">Beverages<span class="traffic-sales-amount ">150
                                            sales <span
                                                class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i
                                                    class="fa fa-fw fa-arrow-up"></i></span><span
                                                class="ml-1 text-success">5.86%</span></span>
                                    </span>
                                </li>
                                <li class="traffic-sales-content list-group-item"><span
                                        class="traffic-sales-name">Mee/Kuey Teow/Bihun<span
                                            class="traffic-sales-amount ">100 sales <span
                                                class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i
                                                    class="fa fa-fw fa-arrow-down"></i></span><span
                                                class="ml-1 text-danger">4.02%</span></span>
                                    </span>
                                </li>

                                <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Soup
                                        Dish<span class="traffic-sales-amount ">98
                                            sales <span
                                                class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i
                                                    class="fa fa-fw fa-arrow-down"></i></span><span
                                                class="ml-1 text-danger">4.02%</span></span>
                                    </span>
                                </li>
                                <li class="traffic-sales-content list-group-item"><span
                                        class="traffic-sales-name">Seafood Dish<span class="traffic-sales-amount ">80
                                            sales <span
                                                class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i
                                                    class="fa fa-fw fa-arrow-down"></i></span><span
                                                class="ml-1 text-danger">4.02%</span></span>
                                    </span>
                                </li>

                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn-primary-link">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- SALES BY CATEGORIES end -->
                <div class="col-xl-12 col-ml-12 col-lg-12 mt-10">
                    <div class="card"></div>

                </div>


                <!-- TOP SELLING PRODUCTS start -->
                <div class="col-xl-12 col-ml-12 col-lg-12 mt-10">

                    <div class="card">
                        <h5 class="card-header">Top Selling Products</h5>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Product Name</th>
                                            <th class="border-0">Product Id</th>
                                            <th class="border-0">Quantity Sold</th>
                                            <th class="border-0">Price</th>

                                            <th class="border-0">Categories</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="m-r-10"><img src="assets/images/paprik.webp" alt="user"
                                                        class="rounded" width="45"></div>
                                            </td>
                                            <td>Nasi Goreng Paprik </td>
                                            <td>P010 </td>
                                            <td>178</td>
                                            <td>RM6.00</td>

                                            <td>Fried Rice</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="m-r-10"><img src="assets/images/thai.jpeg" alt="user"
                                                        class="rounded" width="45"></div>
                                            </td>
                                            <td>Nasi Goreng Thai </td>
                                            <td>P021</td>
                                            <td>168</td>
                                            <td>RM6.50</td>

                                            <td>Fried Rice</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="m-r-10"><img src="assets/images/chicken chop.jpeg"
                                                        alt="user" class="rounded" width="45"></div>
                                            </td>
                                            <td>Chicken Chop </td>
                                            <td>P013</td>
                                            <td>155</td>
                                            <td>RM7.00</td>

                                            <td>Western</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="m-r-10"><img src="assets/images/ayam goreng.jpeg" alt="user"
                                                        class="rounded" width="45"></div>
                                            </td>
                                            <td>Ayam Goreng Taf </td>
                                            <td>P009</td>
                                            <td>148</td>
                                            <td>RM3.00</td>

                                            <td>Western </td>
                                        </tr>


                                    </tbody>
                                </table>
                                <div class="card-footer text-center">
                                    <a href="#" class="btn-primary-link">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TOP SELLING PRODUCT end -->


                <!-- LEAST SELLING PRODUCT start -->
                <div class="col-xl-12 col-ml-12 col-lg-12 mt-10">

                    <div class="card">
                        <h5 class="card-header">Least Selling Products</h5>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Product Name</th>
                                            <th class="border-0">Product Id</th>
                                            <th class="border-0">Quantity Sold</th>
                                            <th class="border-0">Price</th>

                                            <th class="border-0">Categories</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="m-r-10"><img src="assets/images/soup sayur.jpeg" alt="user"
                                                        class="rounded" width="45"></div>
                                            </td>
                                            <td>Sup Sayur </td>
                                            <td>P017 </td>
                                            <td>20</td>
                                            <td>RM4.50</td>

                                            <td>Soup Dish/td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="m-r-10"><img src="assets/images/kankung masin.jpeg"
                                                        alt="user" class="rounded" width="45"></div>
                                            </td>
                                            <td>Kankung Masin</td>
                                            <td>P019 </td>
                                            <td>18</td>
                                            <td>RM4.50</td>

                                            <td>Kangkung Dish </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="m-r-10"><img src="assets/images/telur bistik.jpeg"
                                                        alt="user" class="rounded" width="45"></div>
                                            </td>
                                            <td>Telur Bistik </td>
                                            <td>P020</td>
                                            <td>16</td>
                                            <td>RM5.00</td>

                                            <td>Egg Dish</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="m-r-10"><img src="assets/images/maggie goreng.jpeg"
                                                        alt="user" class="rounded" width="45"></div>
                                            </td>
                                            <td>Maggie Goreng </td>
                                            <td>P034 </td>
                                            <td>13</td>
                                            <td>RM4.00</td>

                                            <td>Maggie </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div class="card-footer text-center">
                                    <a href="#" class="btn-primary-link">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LEAST SELLING PRODUCTS end -->

                <!-- order breakdown area start -->
                <div class="sales-report-area sales-style-two">
                    <div class="row">
                        <div class="col-xl-6 col-ml-6 col-lg-6 mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Payment Method</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 2 Months</option>
                                            <option value="0">Annual</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="cust_payment" height="150"></canvas>
                            </div>
                        </div>

                        <div class="col-xl-6 col-ml-6 col-lg-6 mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Order Method</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 2 Months</option>
                                            <option value="0">Annual</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="cust_age" height="150"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6 mt-5">

                        </div>


                    </div>
                </div>
                <!-- order breakdown area end -->


            </div>
        </div>
    </div>
    <!-- main content area end -->




    <!-- footer area start-->
    @include('include.footer')
    <!-- footer area end-->











    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    @include('include.offset')
    @include('include.script')


    <script>
        var xValues = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var yValues = <?php echo $salesChart; ?>;

        new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: yValues
            }]
        },
        options: {
            legend: {display: false},
            scales: {
            yAxes: [{ticks: {min: 12, max:200}}],
            }
        }
        });
    </script>




    <!-- Payment Types-->
    <script>
        var xValues = ["Cash", "PayPal"];
        var yValues = <?php echo $orderPayment; ?>;
        var barColors = [
        "#004c6d",
        "#436f8d",

        ];
        
        new Chart("cust_payment", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            
        }
        });
    </script>

    <!-- Order Types -->
    <script>
        var xValues = ["Dine-In", "Booking", "Take Away", "Delivery"];
        var yValues = [37, 49, 12, 21];
        var barColors = [
        "#004c6d",
        "#436f8d",
        "#7193af",
        "#b6cee3",
        ];
        
        new Chart("cust_age", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            
        }
        });
    </script>




</body>

</html>