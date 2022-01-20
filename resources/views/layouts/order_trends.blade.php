<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ordering Trends</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/vector-map/jqvmap.css">
    <link rel="stylesheet" href="assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
</head>

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
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Salim Kasim <i
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
            <div class="main-content-inner">
                <div class="row">

                    <!-- SALES Statistics area start -->
                    <div class="col-lg-8 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Sales</h4>
                                <div id="user-statistics"></div>
                            </div>
                            <div class="card-footer text-center">
                                <a href="report.php" class="btn-primary-link">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- SALES Statistics area end -->



                    <!-- SALES BY CATEGORIES start -->
                    <div class="col-lg-4 mt-5">
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

                                    <li class="traffic-sales-content list-group-item"><span
                                            class="traffic-sales-name">Soup Dish<span class="traffic-sales-amount ">98
                                                sales <span
                                                    class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i
                                                        class="fa fa-fw fa-arrow-down"></i></span><span
                                                    class="ml-1 text-danger">4.02%</span></span>
                                        </span>
                                    </li>
                                    <li class="traffic-sales-content list-group-item"><span
                                            class="traffic-sales-name">Seafood Dish<span
                                                class="traffic-sales-amount ">80 sales <span
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
                                                    <div class="m-r-10"><img src="assets/images/ayam goreng.jpeg"
                                                            alt="user" class="rounded" width="45"></div>
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
                                                    <div class="m-r-10"><img src="assets/images/soup sayur.jpeg"
                                                            alt="user" class="rounded" width="45"></div>
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

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 js-->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstrap bundle js-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js-->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- chartjs js-->
    <script src="assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="assets/vendor/charts/charts-bundle/chartjs.js"></script>

    <!-- main js-->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- jvactormap js-->
    <script src="assets/vendor/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- sparkline js-->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="assets/vendor/charts/sparkline/spark-js.js"></script>
    <!-- dashboard sales js-->
    <script src="assets/libs/js/dashboard-sales.js"></script>
    <!-- barchart customer segmentation -->
    <script>
        var horizontalBarChart = new Chart("cust_segmentation", {
           type: 'horizontalBar',
           data: {
              labels: ["Platinum Customer", "Loyal Customer", "Recent Customer", "Potential Customer", "Loosing Customer", "Evasive Customer", "Lost Customer"],
              datasets: [{
                 data: [300, 320, 1000, 1100, 800, 600, 400],
                 backgroundColor: ["#004c6d", "#2d5f7e", "#4a7290", "#6486a2", "#7d9bb4", "#97b0c6", "#b1c6d9"], 
              }]
           },
           options: {
              tooltips: {
                enabled: false
              },
              responsive: true,
              legend: {
                 display: false,
                 position: 'bottom',
                 fullWidth: true,
                 labels: {
                   boxWidth: 10,
                   padding: 50
                 }
              },
              scales: {
                 yAxes: [{
                   barPercentage: 0.95,
                   gridLines: {
                     display: true,
                     drawTicks: true,
                     drawOnChartArea: false
                   },     
                    
                 }],
                 xAxes: [{
                     gridLines: {
                       display: true,
                       drawTicks: false,
                       tickMarkLength: 5,
                       drawBorder: false
                     },
                    ticks: {
                     padding: 5,
                     beginAtZero: true,  
                   },
                   
                 }]
              }
           }
        });
    </script>


    <!-- half doughnut sentiment analysis -->
    <script>
        var ctx = document.getElementById("sent_analysis");
        var dashboardChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Negative", "Neutral", "Positive"],
            datasets: [{
                label: '# of Votes',
                data: [33, 12, 55],
                backgroundColor: [
                    'rgba(231, 76, 60, 1)',
                    'rgba(255, 164, 46, 1)',
                    'rgba(46, 204, 113, 1)'
                ],
                borderColor: [
                    'rgba(255, 255, 255 ,1)',
                    'rgba(255, 255, 255 ,1)',
                    'rgba(255, 255, 255 ,1)'
                ],
                borderWidth: 10
            }]

        },
        options: {
            rotation: 1 * Math.PI,
            circumference: 1 * Math.PI,
            legend: {
                display: false
            },
            tooltip: {
                enabled: false
            },
            cutoutPercentage: 60,
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