<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Terms of Service</title>
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
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/suneditor.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('admin-assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/suneditor.js')}}"></script>
</head>
<!-- preloader area start -->

<!-- preloader area end -->
<body>

<!-- page container area start -->
<div class="page-container">

    <!-- sidebar menu area start -->
    @include("admin-include.sidebar") <!-- sidebar menu -->
        <!-- main content area start -->
        <div class="main-content">
            @include('admin-include.header')
        <!-- header area end -->

        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">Dashboard</h4>
                    </div>
                </div>
                @include("admin-include.adminbar")
            </div>
        </div>
        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="row">
                        <!-- Textual inputs start -->
                        <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('biz_hour.update', $biz_hour->Day_Id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <h4 class="header-title">Edit Business Hours</h4>
                                        <label>Day:{{ $biz_hour->Day_Of_Week }}</label>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label>Start Time:</label>
                                                <input type="time" class="form-control"
                                                value="{{ $biz_hour->Start_Time }}" name="start_Time" Required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label>End Time:</label>
                                                <input type="time" class="form-control" 
                                                value="{{ $biz_hour->End_Time }}" name="End_Time" Required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                                <label for="example-text-input"
                                                    class="col-form-label">Day Off:</label><br>
                                                <label class="switch">
                                                    <input type="hidden" value="0" name="Status">
                                                    <input
                                                         value="1" type="checkbox" name="Status" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                        </div>
                                        <button type="submit" style="float: right; margin-right: 10px"
                                            class="btn btn-success mb-3" name="upload">Edit</button>
                                        <a class="btn btn-danger" style="float: right; margin-right: 10px"
                                            href="{{ route('biz_hour.index') }}">Back</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Textual inputs end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content area end -->
</div>
</body>
</html>
<!-- page container area end -->
