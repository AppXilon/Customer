<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Business Hours</title>
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
    <?php use Carbon\Carbon; ?>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        @include("admin-include.sidebar") <!-- sidebar menu -->
        <!-- main content area start -->
        <div class="main-content">
            @include('admin-include.header') <!-- header-->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index2.html">Home</a></li>
                                <li><span>Business Hours</span></li>
                            </ul>
                        </div>
                    </div>
                    @include("admin-include.adminbar")
                </div>
            </div>

        <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Add New Question</h4>
                
                   
                {{-- <div class="main-content-inner">
                    <div class="col-lg-6 mt-5">
                    </div>
                </div> --}}

                <div class="main-content-inner">
                    <div class="row">
                        <div class="col-lg-12 col-ml-12">
                            <div class="row">
                                <!-- Textual inputs start -->
                                <div class="col-12 mt-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Emails</h4>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="form-row">
                                                        <label class="col-form-label">Enable Notifications</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                      </label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="form-row">
                                                        <label class="col-form-label">Send Email Reminder</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                                                    <input class="form-control" type="number" value="1" min="1" id="example-text-input">
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <label class="col-form-label">hours before</label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="form-row">
                                                        <label class="col-form-label">Email Reminder Subject</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <input class="form-control" type="name" value="" id="example-text-input">                                       </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="form-row">
                                                        <label class="col-form-label">Email Reminder Message</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <input class="form-control" type="text" id="example-text-input" style="height: 200px;">
                                                </div>
                                                <div class="col-lg-12 mt-5" style="text-align: center;">
                                                    <button type="button" class="btn btn-primary mb-3">Save</button>
                                                </div>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
            <!-- main content area end -->
            </div>
        </div>
    </div>
    <!-- jquery latest version -->
    <script src="{{asset('admin-assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('admin-assets/js/popper.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/metisMenu.min.js')}}"></script>
  
    <script src="{{asset('admin-assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/jquery.slicknav.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" 
    integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" 
    referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" 
    integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <!-- others plugins -->
    <script src="{{asset('admin-assets/js/plugins.js')}}"></script>
    <script src="{{asset('admin-assets/js/scripts.js')}}"></script>
</body>
</html>

