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
                    @include('include.managerBar')
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">

                    {{-- ADD FROM ADMINKIT-DEV --}}
                    
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Sales</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">2.382</h1>
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Visitors</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">14.212</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Earnings</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="dollar-sign"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">$21.300</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Orders</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="shopping-cart"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">64</h1>
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Recent Movement</h5>
								</div>
								<div class="card-body py-3">
									<div class="chart chart-sm">
										<canvas id="chartjs-dashboard-line"></canvas>
									</div>
								</div>
							</div>
						</div>
					

                    {{-- END FROM ADMINKIT-DEV --}}



                    <!-- custDetail start -->
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-user"></i> Total Customer</div>
                                            <h2>
                                                <?php echo $totalCustomer?>
                                            </h2>
                                        </div>
                                        {{-- <canvas id="seolinechart1" height="50"></canvas> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-user"></i> Today's Customer</div>
                                            <h2>
                                                <?php echo $todayCustomer?>
                                            </h2>
                                        </div>
                                        {{-- <canvas id="seolinechart2" height="50"></canvas> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">New Customer</div>
                                            <h2>
                                                <?php echo $newCustomer?>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">Repeated Customer</div>
                                            <h2>
                                                <?php echo $repeatCustomer?>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- custDetail area end -->
                    
                    <!-- sentiment analysis area start -->
                    <div class="col-lg-4 mt-5">
                        
                            <div class="single-report" style="padding: 10px 16px 10px 16px";>
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between" >
                                        <h4 class="header-title mb-0">Sentiment Analysis</h4>
                                        <select class="custome-select border-0 pr-3" onchange="filterDataSentiment()" id="dataSentiment">
                                            <option value="0" selected="">All Time</option>
                                            <option value="1">Last 7 Days</option>
                                            <option value="2">Last 2 Months</option>
                                            <option value="3">Annual</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="sentiment_analysis" width="450" height="233"></canvas>
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
                            <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Customer by Gender</h4>
                                            <select class="customer-select border-0 pr-3" onchange="filterDataGender()" id="dataGender">
                                                <option value="0" selected="">All Time</option>
                                                <option value="1">Last 7 Days</option>
                                                <option value="2">Last 2 Months</option>
                                                <option value="3">Annual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="cust_jantina" height="150"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Customer by Age</h4>
                                            <select class="custome-select border-0 pr-3" onchange="filterDataAge()" id="dataAge">
                                                <option value="0" selected="">All Time</option>
                                                <option value="1">Last 7 Days</option>
                                                <option value="2">Last 2 Months</option>
                                                <option value="3">Annual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="cust_umur" height="150"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Customer by Marital</h4>
                                            <select class="custome-select border-0 pr-3" onchange="filterDataMarital()" id="dataMarital">
                                                <option value="0" selected="">All Time</option>
                                                <option value="1">Last 7 Days</option>
                                                <option value="2">Last 2 Months</option>
                                                <option value="3">Annual</option>
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
                                            <h4 class="header-title mb-0">Customer by Race</h4>
                                            <select class="custome-select border-0 pr-3" onchange="filterDataRace()" id="dataRace">
                                                <option value="0" selected="">All Time</option>
                                                <option value="1">Last 7 Days</option>
                                                <option value="2">Last 2 Months</option>
                                                <option value="3">Annual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="cust_race" height="150"></canvas>
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
        var xValues = ["Negative", "Neutral", "Positive"];
        var yValues = <?php echo $sentimentAnalysis; ?>;
        var barColors = [
        "#FA586D",
        "#FEAC00",
        "#11BA5D",
        ];
        var sentimentChart =new Chart("sentiment_analysis", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                
                }
            }
        });
        
        function filterDataSentiment() {
            

            if (document.getElementById("dataSentiment").value == 0) {
                var sentimentAllTime = <?php echo $sentimentAnalysis; ?>;
                sentimentChart.data.datasets[0].data = sentimentAllTime;
            }
            else if (document.getElementById("dataSentiment").value == 1) {
                var sentimentWeekly = <?php echo $sentimentAnalysisWeek; ?>;
                sentimentChart.data.datasets[0].data = sentimentWeekly;
            }
            else if (document.getElementById("dataSentiment").value == 2) {
                var sentimentMonth = <?php echo $sentimentAnalysisMonth; ?>;
                sentimentChart.data.datasets[0].data = sentimentMonth;
            }
            else if (document.getElementById("dataSentiment").value == 3) {
                var sentimentAnnual = <?php echo $sentimentAnalysisYear; ?>;
                sentimentChart.data.datasets[0].data = sentimentAnnual;
            }

            sentimentChart.update();
            //console.log(yvalues2);
        }
    </script>

    //<!-- customer by gender -->
       
    <script>
        //var labels = ["Female", "Male"];
        //var dataAllTime = <?php echo $custGender; ?>;


        var xValues = ["Female", "Male"];
        var yValues = <?php echo $custGender; ?>;

        var barColors = [
        "#FF7043",
        "#FFA726",
        ];

        
        var genderChart = new Chart("cust_jantina", {
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

        function filterDataGender() {
            

            if (document.getElementById("dataGender").value == 0) {
                var genderAllTime = <?php echo $custGender; ?>;
                genderChart.data.datasets[0].data = genderAllTime;
            }
            else if (document.getElementById("dataGender").value == 1) {
                var genderWeekly = <?php echo $custGenderWeek; ?>;
                genderChart.data.datasets[0].data = genderWeekly;
            }
            else if (document.getElementById("dataGender").value == 2) {
                var genderMonth = <?php echo $custGenderMonth; ?>;
                genderChart.data.datasets[0].data = genderMonth;
            }
            else if (document.getElementById("dataGender").value == 3) {
                var genderAnnual = <?php echo $custGenderYear; ?>;
                genderChart.data.datasets[0].data = genderAnnual;
            }

            genderChart.update();
            //console.log(yvalues2);
        }
    </script>

    

    // <!-- customer by age -->
    <script>
        var xValues = ["<30 y/o", ">30 y/o"];
        var yValues = <?php echo $custAge; ?>;
        var barColors = [
        "#FFCA28",
        "#FFEE58",
        ];
        
        var ageChart = new Chart("cust_umur", {
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

        function filterDataAge() {
            //var yValues2 = [...yValues];
            //var type = document.getElementById('value');

            if (document.getElementById("dataAge").value == 0) {
                var ageAllTime = <?php echo $custAge; ?>;
                ageChart.data.datasets[0].data = ageAllTime;
            }
            else if (document.getElementById("dataAge").value == 1) {
                var ageWeekly = <?php echo $custAgeWeek; ?>;
                ageChart.data.datasets[0].data = ageWeekly;
            }
            else if (document.getElementById("dataAge").value == 2) {
                var ageMonth = <?php echo $custAgeMonth; ?>;
                ageChart.data.datasets[0].data = ageMonth;
            }
            else if (document.getElementById("dataAge").value == 3) {
                var ageAnnual = <?php echo $custAgeYear; ?>;
                ageChart.data.datasets[0].data = ageAnnual;
            }

            ageChart.update();
            //console.log(yvalues2);
        }
    </script>




        //<!-- customer by race -->
        <script>
            var xValues = ["Malay", "Chinese", "Indian", "Other"];
            var yValues = <?php echo $custRace; ?>;
            var barColors = [
            "#D4E157",
            "#9CCC65",
            "#66BB6A",
            ];
            
            var raceChart = new Chart("cust_race", {
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

            function filterDataRace() {
            //var yValues2 = [...yValues];
            //var type = document.getElementById('value');

            if (document.getElementById("dataRace").value == 0) {
                var raceAllTime = <?php echo $custRace; ?>;
                raceChart.data.datasets[0].data = raceAllTime;
            }
            else if (document.getElementById("dataRace").value == 1) {
                var raceWeekly = <?php echo $custRaceWeek; ?>;
                raceChart.data.datasets[0].data = raceWeekly;
            }
            else if (document.getElementById("dataRace").value == 2) {
                var raceMonth = <?php echo $custRaceMonth; ?>;
                raceChart.data.datasets[0].data = raceMonth;
            }
            else if (document.getElementById("dataRace").value == 3) {
                var raceAnnual = <?php echo $custRaceYear; ?>;
                raceChart.data.datasets[0].data = raceAnnual;
            }

            raceChart.update();
            //console.log(yvalues2);
        }
        </script>

        //<!-- customer by marital -->
        <script>
            var xValues = ["Single", "Married", "Widowed", "Divorced"];
            var yValues = <?php echo $custMarital; ?>;
            var barColors = [
            "#26C6DA",
            "#29B6F6",
            "#26A69A",
            "#b6cee3",
            ];
            
            var maritalChart = new Chart("cust_marital", {
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

            function filterDataMarital() {
            //var yValues2 = [...yValues];
            //var type = document.getElementById('value');

            if (document.getElementById("dataMarital").value == 0) {
                var maritalAllTime = <?php echo $custMarital; ?>;
                maritalChart.data.datasets[0].data = maritalAllTime;
            }
            else if (document.getElementById("dataMarital").value == 1) {
                var maritalWeekly = <?php echo $custMaritalWeek; ?>;
                maritalChart.data.datasets[0].data = maritalWeekly;
            }
            else if (document.getElementById("dataMarital").value == 2) {
                var maritalMonth = <?php echo $custMaritalMonth; ?>;
                maritalChart.data.datasets[0].data = maritalMonth;
            }
            else if (document.getElementById("dataMarital").value == 3) {
                var maritalAnnual = <?php echo $custMaritalYear; ?>;
                maritalChart.data.datasets[0].data = maritalAnnual;
            }

            maritalChart.update();
            
            }
        </script>

</body>

