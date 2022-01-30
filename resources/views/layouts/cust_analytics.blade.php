@include('include.header')


	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>AdminKit Demo - Bootstrap 5 Admin Template</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


<head>
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
 
    <script nonce="undefined" src="https://cdn.zingchart.com/zingchart.min.js"></script>
    
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

<<<<<<< HEAD
                    {{-- ADD FROM ADMINKIT-DEV --}}
                    <div class="row" style="padding: 30px 0px 0px 15px">

                        {{-- customer details start --}}
						<div class="col-xl-6 col-xxl-5 d-flex"  >
							<div class="w-100">                              
=======
                    <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Total Customer</h5>
													</div>

													<div class="col-auto">
														<div class="seofct-icon" style="padding: 4px 5px 0px 5px; color: rgba(98, 97, 167, 0.562)">
															<i class="fa fa-users"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php echo $totalCustomer?></h1>
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
														<h5 class="card-title">Today's Customer</h5>
													</div>

													<div class="col-auto">
														<div class="seofct-icon" style="padding: 4px 5px 0px 5px; color: rgba(109, 167, 97, 0.562)">
															<i class="fa fa-calendar-plus-o"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php echo $todayCustomer?></h1>
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
														<h5 class="card-title">New Cuctomer</h5>
													</div>

													<div class="col-auto">
														<div class="seofct-icon" style="padding: 4px 5px 0px 5px; color: rgba(167, 119, 97, 0.562)">
															<i class="fa fa-user-plus"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php echo $newCustomer?></h1>
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
														<h5 class="card-title">Repeated Customer</h5>
													</div>

													<div class="col-auto">
														<div class="seofct-icon" style="padding: 4px 5px 0px 5px; color: rgba(177, 174, 174, 0.562)">
															<i class="fa fa-repeat"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php echo $newCustomer?></h1>
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
<<<<<<< HEAD
                        {{-- end customer details --}}
                    
                        {{-- customer line chart --}}
						<div class="col-xl-6 col-xxl-5 d-flex" >
=======

						<div class="col-xl-6 col-xxl-7">
>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11
							<div class="card flex-fill w-100">
								<div class="s-report-title d-flex justify-content-between" style="padding:25px 25px 0px 25px">
                                    <h4 class="header-title mb-0" style="padding:0px">Customer Analytics</h4>
                                    
                                </div>
								<div class="card-body py-3">
									<div class="chart chart-sm">
										<canvas id="customerChart" height="140"></canvas>
									</div>
								</div>
							</div>
						</div>
<<<<<<< HEAD
=======
					</div>

					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Browser Usage</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td>Chrome</td>
													<td class="text-end">4306</td>
												</tr>
												<tr>
													<td>Firefox</td>
													<td class="text-end">3801</td>
												</tr>
												<tr>
													<td>IE</td>
													<td class="text-end">1689</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Real-Time</h5>
								</div>
								<div class="card-body px-4">
									<div id="world_map" style="height:350px;"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-lg-8 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Latest Projects</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Name</th>
											<th class="d-none d-xl-table-cell">Start Date</th>
											<th class="d-none d-xl-table-cell">End Date</th>
											<th>Status</th>
											<th class="d-none d-md-table-cell">Assignee</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Project Apollo</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Vanessa Tucker</td>
										</tr>
										<tr>
											<td>Project Fireball</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-danger">Cancelled</span></td>
											<td class="d-none d-md-table-cell">William Harris</td>
										</tr>
										<tr>
											<td>Project Hades</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Sharon Lessman</td>
										</tr>
										<tr>
											<td>Project Nitro</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-warning">In progress</span></td>
											<td class="d-none d-md-table-cell">Vanessa Tucker</td>
										</tr>
										<tr>
											<td>Project Phoenix</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">William Harris</td>
										</tr>
										<tr>
											<td>Project X</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Sharon Lessman</td>
										</tr>
										<tr>
											<td>Project Romeo</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Christina Mason</td>
										</tr>
										<tr>
											<td>Project Wombat</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-warning">In progress</span></td>
											<td class="d-none d-md-table-cell">William Harris</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-12 col-lg-4 col-xxl-3 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Monthly Sales</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-bar"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
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
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>

















                 

>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11

                        {{-- end customer line chart --}}
					
                    </div>

                    <div class="row" style="padding: 30px 10px 0px 15px">

                        {{-- top popular customer --}}
						<div class="col-12 col-lg-6 col-xxl-6 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
                                    <h4 class="header-title">Striped Rows</h4>
                                    <div class="single-table">
                                        <div class="table-responsive">
                                            <table class="table table-striped text-center">
                                                <thead class="text-uppercase">
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">date</th>
                                                        <th scope="col">price</th>
                                                        <th scope="col">action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>09 / 07 / 2018</td>
                                                        <td>$120</td>
                                                        <td><i class="ti-trash"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>jone</td>
                                                        <td>09 / 07 / 2018</td>
                                                        <td>$150</td>
                                                        <td><i class="ti-trash"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>09 / 07 / 2018</td>
                                                        <td>$120</td>
                                                        <td><i class="ti-trash"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>jone</td>
                                                        <td>09 / 07 / 2018</td>
                                                        <td>$150</td>
                                                        <td><i class="ti-trash"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
                        {{-- end top popular customer --}}

                        {{-- Review Word Cloud chart start --}}
						<div class="col-12 col-lg-3 col-xxl-3 d-flex">
							<div class="card flex-fill w-100">
								<div class="s-report-title d-flex justify-content-between" style="padding:25px 25px 0px 25px">
                                    <h4 class="header-title mb-0">Review Word Cloud</h4>
                                    
                                </div>
<<<<<<< HEAD
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										
											
                                        <div id="wordCloud"></div>
											
										

										
									</div>
								</div>


							</div>
						</div>
                        {{-- Review Word Cloud chart end --}}

                        {{-- sentiment analysis chart start --}}
						<div class="col-12 col-lg-3 col-xxl-3 d-flex">
							<div class="card flex-fill w-100">
								<div class="s-report-title d-flex justify-content-between" style="padding:25px 25px 0px 25px">
                                    <h4 class="header-title mb-0">Sentiment Analysis</h4>
                                    <select class="custome-select border-0 pr-3" onchange="filterDataSentiment()" id="dataSentiment">
=======
                            </div>
                        </div>
                    </div>
                    <!-- custDetail area end -->

                    <!-- sentiment analysis area start -->
                    <div class="col-lg-4 mt-5">

                        <div class="single-report" style="padding: 10px 16px 10px 16px" ;>
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="s-report-title d-flex justify-content-between">
                                    <h4 class="header-title mb-0">Sentiment Analysis</h4>
                                    <select class="custome-select border-0 pr-3" onchange="filterDataSentiment()"
                                        id="dataSentiment">
>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11
                                        <option value="0" selected="">All Time</option>
                                        <option value="1">Last 7 Days</option>
                                        <option value="2">Last 2 Months</option>
                                        <option value="3">Annual</option>
                                    </select>
                                </div>
<<<<<<< HEAD
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="myChart"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td>Positive</td>
													<td class="text-end"><?php echo $sentimentPositive?></td>
												</tr>
												<tr>
													<td>Negative</td>
													<td class="text-end"><?php echo $sentimentNegative?></td>
												</tr>
												<tr>
													<td>Neutral</td>
													<td class="text-end"><?php echo $sentimentNeutral?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>


							</div>
						</div>
                        {{-- sentiment analysis chart end --}}
					</div>

                    
                    {{-- END FROM ADMINKIT-DEV --}}

=======
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
                                <canvas id="cust_segmentation"></canvas>
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
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send
                                                            Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View
                                                            Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Siti Jamilah</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send
                                                            Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View
                                                            Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Nur Kasih</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send
                                                            Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View
                                                            Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Muhammad Fatih</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send
                                                            Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View
                                                            Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Ali Seman</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send
                                                            Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View
                                                            Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>Layla Zinnirah</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send
                                                            Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View
                                                            Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7</th>
                                                    <td>Razin Qidran</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send
                                                            Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View
                                                            Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">8</th>
                                                    <td>Hazeman Huzir</td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">Send
                                                            Email</button></td>
                                                    <td><button type="button" class="btn btn-rounded btn-xs btn-">View
                                                            Profile</button></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list customer end -->
>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11


                    <!-- customer breakdown area start -->
                    <div class="sales-report-area sales-style-two" style="padding: 0px 25px 25px 25px">
                        <div class="row">
                            <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <h4 class="header-title mb-0">Customer by </h4>
                                        <div class="s-report-title d-flex justify-content-between">
<<<<<<< HEAD
                                            <h4 class="header-title mb-0">Gender</h4>
                                            <select class="customer-select border-0 pr-3" onchange="filterDataGender()" id="dataGender">
=======
                                            <h4 class="header-title mb-0">Customer by Gender</h4>
                                            <select class="customer-select border-0 pr-3" onchange="filterDataGender()"
                                                id="dataGender">
>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11
                                                <option value="0" selected="">All Time</option>
                                                <option value="1">Last 7 Days</option>
                                                <option value="2">Last 2 Months</option>
                                                <option value="3">Annual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="cust_jantina" height="200"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <h4 class="header-title mb-0">Customer by </h4>
                                        <div class="s-report-title d-flex justify-content-between">
<<<<<<< HEAD
                                            <h4 class="header-title mb-0">Age</h4>
                                            <select class="custome-select border-0 pr-3" onchange="filterDataAge()" id="dataAge">
=======
                                            <h4 class="header-title mb-0">Customer by Age</h4>
                                            <select class="custome-select border-0 pr-3" onchange="filterDataAge()"
                                                id="dataAge">
>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11
                                                <option value="0" selected="">All Time</option>
                                                <option value="1">Last 7 Days</option>
                                                <option value="2">Last 2 Months</option>
                                                <option value="3">Annual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="cust_umur" height="200"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <h4 class="header-title mb-0">Customer by </h4>
                                        <div class="s-report-title d-flex justify-content-between">
<<<<<<< HEAD
                                            <h4 class="header-title mb-0">Marital</h4>
                                            <select class="custome-select border-0 pr-3" onchange="filterDataMarital()" id="dataMarital">
=======
                                            <h4 class="header-title mb-0">Customer by Marital</h4>
                                            <select class="custome-select border-0 pr-3" onchange="filterDataMarital()"
                                                id="dataMarital">
>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11
                                                <option value="0" selected="">All Time</option>
                                                <option value="1">Last 7 Days</option>
                                                <option value="2">Last 2 Months</option>
                                                <option value="3">Annual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="cust_marital" height="200"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <h4 class="header-title mb-0">Customer by </h4>
                                        <div class="s-report-title d-flex justify-content-between">
<<<<<<< HEAD
                                            <h4 class="header-title mb-0">Race</h4>
                                            <select class="custome-select border-0 pr-3" onchange="filterDataRace()" id="dataRace">
=======
                                            <h4 class="header-title mb-0">Customer by Race</h4>
                                            <select class="custome-select border-0 pr-3" onchange="filterDataRace()"
                                                id="dataRace">
>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11
                                                <option value="0" selected="">All Time</option>
                                                <option value="1">Last 7 Days</option>
                                                <option value="2">Last 2 Months</option>
                                                <option value="3">Annual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="cust_race" height="200"></canvas>
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

    {{-- word cloud start --}}
    <script>
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
        zingchart.MODULESDIR = 'https://cdn.zingchart.com/modules/';
        var myConfig = {
        type: 'wordcloud',
        options: {
            text: 'The food was exposed, so many fly. Very expensive and taste dull..owner and staff never smile and take so long to take order. Seriously regret! Various traditional Malay dishes and you can eat almost everything here. There is also kueh, satay and so much more. Food is nice. Price is slightly on the high side. It costs us RM1133.00 today for 30 people dine. There were 6 pcs Siakap 3 rasa, 6 pcs Pari Sambal Petai, Lala sambal manis 5 full plate, Limau Ais 5 jugs, Sotong Goreng Tepung 1.3kg, Tom Yam for 30 people, Kailan ikan masin 5 set and Ikan merah 3 rasa 1 pcs. Affordable and service fast than expected. However, disappointed as they dont accept table reservation before orders been made. They even discounted and need to pay only RM1100 without even kami minta to be discounted. Thanks! Accept MAYBANK QR Pay',
            minLength: 4,
            maxItems: 30,           
    
            
        }
        };
        zingchart.render({
        id: 'wordCloud',
        data: myConfig,
        height: 300,
        width: '100%'
        });
  

    </script>
    {{-- word cloud end --}}



    {{-- sentiment analysis pie chart --}}
    <script>
        var xValues = ["Negative", "Positive", "Neutral"];
        var yValues = <?php echo $sentimentAnalysis; ?>;
        var barColors = [
            "#FA586D",
            "#FEAC00",
            "#11BA5D"
        ];

        var sentimentChart = new Chart("myChart", {
        type: "doughnut",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            legend: {
                display: false
                },
            
            cutoutPercentage: 65
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
            
        }
    </script>

<<<<<<< HEAD
    //{{-- end sentiment analysis pie chart --}}
=======
    //
    <!-- customer by gender -->

    <script>
        //var labels = ["Female", "Male"];
        //var dataAllTime = <?php echo $custGender; ?>;
>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11

    

    // <!-- customer by gender -->
       
    <script>
        
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
            legend: {
                position: 'bottom',
                align: 'start',
                labels: {
                    
                    boxWidth: 25,
                    padding: 20
                }
            },
            
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
           
        }
    </script>



    //
    <!-- customer by age -->
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
            legend: {
                position: 'bottom',
                labels: {
                    
                    boxWidth: 20,
                    padding: 20
                }
            }
        }
        });

        function filterDataAge() {
            

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
            
        }
    </script>



<<<<<<< HEAD
    //<!-- customer by race -->
    <script>
            var xValues = ["Malay", "Chinese", "Indian", "Other"];
=======

    //
    <!-- customer by race -->
    <script>
        var xValues = ["Malay", "Chinese", "Indian", "Other"];
>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11
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
                legend: {
                position: 'bottom',
                align: 'start',
                labels: {
                    
                    boxWidth: 20,
                    padding: 20
                }
            }
            }
            });

            function filterDataRace() {
           

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
<<<<<<< HEAD
            
            }
    </script>
        

    //<!-- customer by marital -->
    <script>
            var xValues = ["Single", "Married", "Widowed", "Divorced"];
=======
            //console.log(yvalues2);
        }
    </script>

    //
    <!-- customer by marital -->
    <script>
        var xValues = ["Single", "Married", "Widowed", "Divorced"];
>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11
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
                legend: {
                position: 'bottom',
                labels: {
                    
                    boxWidth: 20,
                    padding: 20
                }
            }
            }
            });

            function filterDataMarital() {
            

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
<<<<<<< HEAD

    
        
    // customer line chart
    <script>
		    var xValues = ["June '21", "Jul '21", "Aug '21", "Sept '21", "Oct '21", "Nov '21", "Dec '21", "Jan '22"];
            var yValues = <?php echo $customerChart; ?>;
            new Chart("customerChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                fill: false,
                lineTension: 0.2,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues
                }]
            },
            options: {
                legend: {display: false},
                scales: {
                    xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
                        yAxes: [{
                        ticks: {
                            min: 10, 
                            max:100,
                            stepSize: 20
                        },                   
                        
                            
                        }],
                }
            }
            });
	</script>

    

</body>
=======
>>>>>>> ca18487dbac0e0e2e0c9c56d463f3fe02d1d0c11

   
</body>