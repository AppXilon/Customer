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
                                             <h2>10</h2>
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
                                             <div class="seofct-icon">Pending</div>
                                             <h2>3</h2>
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
                                             <div class="seofct-icon">Preparing</div>
                                             <h2>5</h2>
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
                                             <div class="seofct-icon">Completed</div>
                                             <h2>2</h2>
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
                             <div class="card-body">
                                 <div class="d-flex justify-content-between mb-4">
                                     <h4 class="header-title mb-0">Sales</h4>
                                     <a class="btn btn-primary mb-3" href="/order_trends" role="button">View Sales</a>
                                 </div>
                                 <div id="user-statistics"></div>
                             </div>
                         </div>
                     </div>
                     <!-- Statistics area end -->
                     <!-- sentiment analysis area start -->
                     <div class="col-lg-4 mt-5">
                         <div class="card h-full">
                             <div class="card-body">
                                 <div class="d-flex justify-content-between mb-4">
                                     <h4 class="header-title mb-0">Sentiment Analysis</h4>
                                     <a class="btn btn-primary mb-3" href="/order" role="button">View Analytics</a>
                                 </div>
                                 <canvas id="sent_analysis" height="233"></canvas><br>
                                 <span class="label success">Postive</span>
                                 <span class="label warning">Neutral</span>
                                 <span class="label danger">Negative</span>

                             </div>
                         </div>
                     </div>
                     <!-- sentiment analysis area end -->
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
         var horizontalBarChart = new Chart("cust_segmentation", {
             type: 'horizontalBar',
             data: {
                 labels: ["Platinum Customer", "Loyal Customer", "Recent Customer", "Potential Customer",
                     "Loosing Customer", "Evasive Customer", "Lost Customer"
                 ],
                 datasets: [{
                     data: [300, 320, 1000, 1100, 800, 600, 400],
                     backgroundColor: ["#004c6d", "#2d5f7e", "#4a7290", "#6486a2", "#7d9bb4", "#97b0c6",
                         "#b1c6d9"
                     ],
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

     <!-- customer by gender -->
     <script>
         var xValues = ["Female", "Male"];
         var yValues = [58, 40];
         var barColors = [
             "#004c6d",
             "#b6cee3",
         ];

         new Chart("cust_gender", {
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

     <!-- customer by age -->
     <script>
         var xValues = ["<30 y/o", ">30 y/o"];
         var yValues = [43, 46];
         var barColors = [
             "#004c6d",
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

     <!-- customer by status -->
     <script>
         var xValues = ["Registered", "Anonymous"];
         var yValues = [67, 36];
         var barColors = [
             "#004c6d",
             "#b6cee3",
         ];

         new Chart("cust_status", {
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

     <!-- customer by marital -->
     <script>
         var xValues = ["Single", "Married", "Widowed", "Divorced"];
         var yValues = [37, 49, 12, 21];
         var barColors = [
             "#004c6d",
             "#436f8d",
             "#7193af",
             "#b6cee3",
         ];

         new Chart("cust_marital", {
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
     <script>
         var horizontalBarChart = new Chart("cust_segmentation", {
             type: 'horizontalBar',
             data: {
                 labels: ["Platinum Customer", "Loyal Customer", "Recent Customer", "Potential Customer",
                     "Loosing Customer", "Evasive Customer", "Lost Customer"
                 ],
                 datasets: [{
                     data: [300, 320, 1000, 1100, 800, 600, 400],
                     backgroundColor: ["#004c6d", "#2d5f7e", "#4a7290", "#6486a2", "#7d9bb4", "#97b0c6",
                         "#b1c6d9"
                     ],
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
         var xValues = ["PayPal", "Credit & Debit Card", "Online Banking", "Touch N Go E-wallet"];
         var yValues = [37, 49, 12, 21];
         var barColors = [
             "#004c6d",
             "#436f8d",
             "#7193af",
             "#b6cee3",
         ];

         new Chart("cust_gender", {
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
