 @include('include.header')

 <head>
    <style>
        * {
          box-sizing: border-box;
        }
        
        .heading {
          font-size: 25px;
          margin-right: 25px;
        }
        
        .checked {
          color: orange;
        }
        
        /* Three column layout */
        .side {
          float: left;
          width: 15%;
          margin-top:10px;
        }
        
        .middle {
          margin-top:10px;
          float: left;
          width: 70%;
        }
        
        /* Place text to the right */
        .right {
          text-align: right;
        }
        
        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        
        
        
        
    </style>
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
                             <h4 class="page-title pull-left">Dashboard</h4>
                         </div>
                     </div>
                     @include('include.managerBar')
                 </div>
             </div>
             <!-- page title area end -->

             <!-- main content inner start -->
             <div class="main-content-inner">
                 <!-- dashboard content start -->
                 <div class="sales-report-area sales-style-two">
                     <div class="row">
                         <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                             <div class="s-sale-inner pt--30 mb-3">
                                 <div class="card">
                                     <div class="seo-fact sbg1">
                                         <div class="p-4 d-flex justify-content-between align-items-center">
                                             <div class="seofct-icon">Total Orders</div>
                                             <h2><?php echo $totalOrder?></h2>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                             <div class="s-sale-inner pt--30 mb-3">
                                 <div class="card">
                                     <div class="seo-fact sbg4">
                                         <div class="p-4 d-flex justify-content-between align-items-center">
                                             <div class="seofct-icon">Pending</div>
                                             <h2><?php echo $pendingOrder?></h2>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                             <div class="s-sale-inner pt--30 mb-3">
                                 <div class="card">
                                     <div class="seo-fact sbg3">
                                         <div class="p-4 d-flex justify-content-between align-items-center">
                                             <div class="seofct-icon">Completed</div>
                                             <h2><?php echo $completeOrder?></h2>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                             <div class="s-sale-inner pt--30 mb-3">
                                 <div class="card">
                                     <div class="seo-fact sbg2">
                                         <div class="p-4 d-flex justify-content-between align-items-center">
                                             <div class="seofct-icon">Total Sales (RM)</div>
                                             <h2><?php echo $totalSales?></h2>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <!-- Statistics area start -->
                     <div class="col-lg-8 mt-5">
                            <div class="card">
                                <div class="card-body" >
                                    <div class="d-flex justify-content-between mb-4">
                                        <h4 class="header-title mb-0">Sales</h4>
                                        
                                    </div>
                                    <div class="card-body py-3">
                                        <div class="chart chart-sm">
                                            <canvas id="myChart" height=220></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                     <!-- Statistics area end -->
                     <!-- rating customer area start -->
                     <div class="col-lg-4 mt-5">
                         <div class="card h-full">
                             <div class="card-body" style="padding:25px, 25px, 25px, 25px">
                                <div class="d-flex justify-content-between mb-4">
                                    <h4 class="header-title mb-0">Rating</h4>
                                    <h1><?php echo $avgRating?></h1>
                                    
                                    
                                </div>
                                <hr style="border:3px solid #f1f1f1">
                                
                                <div class="row" style="padding:5px">
                                    <div class="side">
                                        <div>5 star</div>
                                    </div>
                                    <div class="middle">
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                    </div>
                                    <div class="side right">
                                        <div><?php echo $fiveRating?></div>
                                    </div>
                                    <div class="side">
                                        <div>4 star</div>
                                    </div>
                                    <div class="middle">
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star" style="font-size:27px"></span>
                                    </div>
                                    <div class="side right">
                                        <div><?php echo $fourRating?></div>
                                    </div>
                                    <div class="side">
                                        <div>3 star</div>
                                    </div>
                                    <div class="middle">
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star" style="font-size:27px"></span>
                                        <span class="fa fa-star" style="font-size:27px"></span>
                                    </div>
                                    <div class="side right">
                                        <div><?php echo $threeRating?></div>
                                    </div>
                                    <div class="side">
                                        <div>2 star</div>
                                    </div>
                                    <div class="middle">
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star" style="font-size:27px"></span>
                                        <span class="fa fa-star" style="font-size:27px"></span>
                                        <span class="fa fa-star" style="font-size:27px"></span>
                                    </div>
                                    <div class="side right">
                                        <div><?php echo $twoRating?></div>
                                    </div>
                                    <div class="side">
                                        <div>1 star</div>
                                    </div>
                                    <div class="middle">
                                        <span class="fa fa-star checked" style="font-size:27px"></span>
                                        <span class="fa fa-star" style="font-size:27px"></span>
                                        <span class="fa fa-star" style="font-size:27px"></span>
                                        <span class="fa fa-star" style="font-size:27px"></span>
                                        <span class="fa fa-star" style="font-size:27px"></span>
                                    </div>
                                    <div class="side right">
                                        <div><?php echo $oneRating?></div>
                                    </div>
                                </div>

                             </div>
                         </div>
                     </div>
                     <!-- rating customer area end -->
                 </div>

                 <div class="row">
                     <!-- recent order start -->
                     <div class="col-xl-8 col-lg-7 col-md-12 mt-5">
                         <div class="card">
                             <div class="card-body">
                                 <div class="d-flex justify-content-between mb-4">
                                     <h4 class="header-title mb-0">Recent Order List</h4>
                                     <a class="btn btn-primary mb-3" href="/order" role="button">View Order</a>
                                 </div>
                                 <div class="table-responsive">
                                     <table class="table text-center">
                                         <thead class="text-uppercase bg-secondary">
                                             <tr class="text-white">
                                                 <th scope="col">Order ID</th>
                                                 <th scope="col">Customer</th>
                                                 <th scope="col">Order Time</th>
                                                 <th scope="col">Price</th>
                                                 <th scope="col">Status</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td>01</td>
                                                 <td>John</td>
                                                 <td>27-08-2018 01:22:12</td>
                                                 <td>RM 10</td>
                                                 <td style="color:#00D905;">New</td>
                                             </tr>
                                             <tr>
                                                 <td>02</td>
                                                 <td>Ali</td>
                                                 <td>27-08-2018 01:22:12</td>
                                                 <td>RM 11</td>
                                                 <td style="color:#00D905;">New</td>
                                             </tr>
                                             <tr>
                                                 <td>03</td>
                                                 <td>Mahmud</td>
                                                 <td>27-08-2018 01:22:12</td>
                                                 <td>RM 18</td>
                                                 <td style="color:#00D905;">New</td>
                                             </tr>
                                             <tr>
                                                 <td>04</td>
                                                 <td>Sulaiman</td>
                                                 <td>27-08-2018 01:22:12</td>
                                                 <td>RM 17</td>
                                                 <td style="color:#00D905;">New</td>
                                             </tr>
                                             <tr>
                                                 <td>05</td>
                                                 <td>Kamaruzzaman</td>
                                                 <td>27-08-2018 01:22:12</td>
                                                 <td>RM 13</td>
                                                 <td style="color:#00D905;">New</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                     <div class="pagination_area pull-right mt-5">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                             <li><a href="#">1</a></li>
                                             <li><a href="#">2</a></li>
                                             <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                         </ul><br>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- recent order end -->
                     <!-- popular product start -->
                     <div class="col-xl-4 col-lg-5 col-md-12 mt-5">
                         <div class="card">
                             <div class="card-body">
                                 <div class="d-flex justify-content-between mb-4">
                                     <h4 class="header-title mb-0">Popular Product</h4>
                                     <a class="btn btn-primary mb-3" href="/order" role="button">View Trends</a>
                                 </div>
                                 <div class="member-box">
                                     <div class="s-member">
                                         <div class="media align-items-center">
                                             <div class="media-body ml-5">
                                                 <p>Nasi Lemak</p><span>Main Dish</span>
                                             </div>
                                             <div class="tm-social">
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="s-member">
                                         <div class="media align-items-center">
                                             <div class="media-body ml-5">
                                                 <p>Nasi Goreng</p><span>Main Dish</span>
                                             </div>
                                             <div class="tm-social">
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="s-member">
                                         <div class="media align-items-center">
                                             <div class="media-body ml-5">
                                                 <p>Mee Goreng</p><span>Main Dish</span>
                                             </div>
                                             <div class="tm-social">
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star"></span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="s-member">
                                         <div class="media align-items-center">
                                             <div class="media-body ml-5">
                                                 <p>Iced Tea</p><span>Beverage</span>
                                             </div>
                                             <div class="tm-social">
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star"></span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="pagination_area pull-right mt-5">
                                     <ul>
                                         <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                         <li><a href="#">1</a></li>
                                         <li><a href="#">2</a></li>
                                         <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                     </ul><br>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- popular product end -->
                 </div>


                 <!-- dashboard content end -->

             </div>
         </div>
         <!-- main content area end -->
     </div>
     <!-- container content area end -->

     <!-- footer area start-->
     @include('include.footer')
     <!-- footer area end-->
     </div>
     <!-- page container area end -->

     <!-- offset area start -->
     @include('include.offset')
     <!-- offset area end -->

     @include('include.script')

     <script>
        var xValues = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var yValues = <?php echo $salesChart; ?>;
        var ctx = document.getElementById("myChart").getContext("2d");   
        var gradient = ctx.createLinearGradient(0, 0, 0, 225);
        gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
        gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
            
            new Chart(document.getElementById("myChart"), {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    label: "Sales",
                    fill: true,
                    lineTension: 0.4,
                    backgroundColor: gradient,
                    borderColor: "rgba(0,0,255,0.1)",
                    data: yValues
                }]
            },
            options: {
                legend: {display: false},
                maintainAspectRatio: false,
                tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                scales: {
                    xAxes: [{
                            reverse: true,
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }],
                    yAxes: [{
                        ticks: {
                            min: 0, 
                            max:50,
                            stepSize: 10
                        },   
                        gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                                    
                        
                            
                    }]
                }
            }
            });
    </script>


 </body>
