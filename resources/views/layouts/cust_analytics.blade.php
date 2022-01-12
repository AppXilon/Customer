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
                            <h4 class="page-title pull-left">Customer Analytics</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Customer Analytics</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Salim Kasim <i class="fa fa-angle-down"></i></h4>
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
                    <!-- seo fact area start -->
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-user"></i> Total Customer</div>
                                            <h2>124</h2>
                                        </div>
                                        <canvas id="seolinechart1" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-user"></i> Today's Customer</div>
                                            <h2>32</h2>
                                        </div>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">New Customer</div>
                                            <h2>12</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">Repeated Customer</div>
                                            <h2>20</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- seo fact area end -->
                    
                    <!-- sentiment analysis area start -->
                    <div class="col-lg-4 mt-5">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="header-title">Sentiment Analysis</h4>
                                <canvas id="sent_analysis" width="450" height="233"></canvas>
                                <h4></h4>
                            </div>
                        </div>
                    </div>
                    <!-- sentiment analysis area end -->
                    
                    <!-- customer segemntation area start -->
                    <div class="col-lg-8 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Customer Segementation</h4>
                                <canvas id="cust_segmentation" ></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- customer segmentation area end -->
                    
                    <!-- list customer start -->
                    <div class="col-lg-4 mt-5">
                        <div class="card h-full">
                            <div class="card-body">
                                <h4 class="header-title">Platinum Customer</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Abdullah Hakim</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Siti Jamilah</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Nur Kasih</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Muhammad Fatih</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Ali Seman</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>Layla Zinnirah</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7</th>
                                                    <td>Razin Qidran</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">8</th>
                                                    <td>Hazeman Huzir</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View Profile</button></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list customer end -->


                    <!-- customer breakdown area start -->
                    <div class="sales-report-area sales-style-two">
                        <div class="row">
                            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Customer by Gender</h4>
                                            <select class="custome-select border-0 pr-3">
                                                <option selected="">Last 7 Days</option>
                                                <option value="0">Last 2 Months</option>
                                                <option value="0">Annual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="cust_gender" height="150"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Customer by Age</h4>
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
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Customer by Marital</h4>
                                            <select class="custome-select border-0 pr-3">
                                                <option selected="">Last 7 Days</option>
                                                <option value="0">Last 2 Months</option>
                                                <option value="0">Annual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="cust_marital" height="150"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Customer by Status</h4>
                                            <select class="custome-select border-0 pr-3">
                                                <option selected="">Last 7 Days</option>
                                                <option value="0">Last 2 Months</option>
                                                <option value="0">Annual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="cust_status" height="150"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- customer breakdown area end -->


                   
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
    
    @include('include.script') 

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

</body>

