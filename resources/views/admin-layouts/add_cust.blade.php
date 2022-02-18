<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Customer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset ('admin-assets/images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('admin-assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu-->
        @include("admin-include.sidebar") <!-- sidebar menu -->
        <!-- main content area start -->
        <div class="main-content">
            @include('admin-include.header') <!-- header-->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Add Customer</span></li>
                            </ul>
                        </div>
                    </div>
                    @include("admin-include.adminbar")
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <form action="{{ route('customer.store') }}" method="POST">
                            @csrf
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add Customer</h4>
                                        <div class="col-lg-6 col-md-4 col-sm-6">
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Name:</label>
                                            <input class="form-control" type="text" name="C_Name">
                                        </div>
                                        </div>
                                        <div class="col-lg-12 col-md-4 col-sm-6">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="example-date-input" class="col-form-label">Date of Birth:</label>
                                                        <input class="form-control" type="date" name="C_BirthDate">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="form-row">
                                                        <label class="col-form-label">Gender:</label>
                                                        <select class="form-control" id="gndr" name="C_Gender">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-4 col-sm-6">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="example-tel-input" class="col-form-label">Phone No:</label>
                                                        <input class="form-control" type="tel" placeholder="01234567890" name="C_Phone">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="form-group">
                                                    <label for="example-email-input" class="col-form-label">Email:</label>
                                                    <input class="form-control" type="email" placeholder="name@example.com" name="C_Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputPassword" class="">Password</label>
                                                <input type="password" class="form-control" placeholder="Password" id="pwd"  name="C_Password">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputPassword" class="">Confirm Password:</label>
                                                <input type="password" class="form-control" placeholder="Password" id="conpwd" name="conpwd" >
                                            </div>
                                            <input type="hidden" class="form-control" name="C_Ban" value="0">
                                            <input type="hidden" class="form-control" name="C_Reason" value="null">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-5" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary mb-3" name="upload">Save</button>
                                </div>
                            </div>
                            <!-- Textual inputs end -->
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        @include('admin-include.footer')

    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="{{asset('admin-assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('admin-assets/js/popper.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- others plugins -->
    <script src="{{asset('admin-assets/js/plugins.js')}}"></script>
    <script src="{{asset('admin-assets/js/scripts.js')}}"></script>
</body>

</html>
