<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ban Customer</title>
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
    <div class="page-container">
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
                                <li><span>Ban Customer</span></li>
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
                        <div class="row">
                            <form action="{{ route('customer.update', $customer->C_Id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <!-- Textual inputs start -->
                            <div class="col-12 mt-5" >
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Banning Customer</h4>
                                        <div class="col-lg-12 col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Name: {{ $customer->C_Name }}</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-4 col-sm-6">
                                            <div class="form-row">
                                                <select class="form-control" name="C_Ban" id="ban">
                                                    <option value="1">Ban</option>
                                                    <option value="0">Unban</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-4 col-sm-6">
                                        <div class="row">
                                        <div class="col-lg-8 col-md-4 col-sm-6">
                                            <div class="form-row">
                                                <label class="col-form-label">Reason for Ban:</label>
                                                <select class="form-control" name="C_Reason" id="reason">
                                                    <option value="Suspicious Activity">Suspicious Activity</option>
                                                    <option value="Illegal Transaction">Illegal Transaction</option>
                                                    <option value="Inappropriate Substances/Profanity">Inappropriate Substances/Profanity</option>
                                                    <option value="Scamming/Swindling">Scamming/Swindling</option>
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-5" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary mb-3" name="save">Save</button>
                                </div>
                            </div>
                            <!-- Textual inputs end -->
                            </form>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <!-- offset area end -->
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