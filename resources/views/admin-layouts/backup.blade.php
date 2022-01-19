<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    >
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Form - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="admin-assets/images/icon/favicon.ico">
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
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="APPXILON.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="index2.html"><i class="ti-dashboard"></i><span>Dashboard</span></a></li>
                            <li><a href="biz_hours.html"><i class="ti-time"></i><span>Business Hours</span></a></li>
                            <li><a href="reminder.html"><i class="ti-announcement"></i><span>Reminder</span></a></li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-settings"></i><span>Settings</span></a>
                                <ul class="collapse">
                                    <li><a href="res_form.html">Reservation form</a></li>
                                    <li><a href="payment.html">Payments</a></li>
                                    <li><a href="tnc.html">Terms & Condition</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-wrench"></i><span>System Options</span></a>
                                <ul class="collapse">
                                    <li><a href="captcha.html"><span>Captcha</span></a></li>
                                    <li class="active"><a href="backup.html"><span>Backup</span></a></li>
                                    <li><a href="cleanup.html"><span>Cleanup</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>User</span></a>
                                <ul class="collapse">
                                    <li><a href="man_cust.php">Customer</a></li>
                                    <li><a href="man_manager.html">Manager</a></li>
                                    <li><a href="ban_user.html">Banned User</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i><span>Partners</span></a>
                                <ul class="collapse">
                                    <li><a href="man_rest.html">List</a></li>
                                    <li><a href="pending.html">Pending Request</a></li>
                                    <li><a href="ban_rest.html">Banned Partners</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-file"></i><span>Logs</span></a>
                                <ul class="collapse">
                                    <li><a href="logs_login.html">Login</a></li>
                                    <li><a href="logs_pay.html">Payment</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <!--<div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="admin-assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="admin-assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="admin-assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="admin-assets/images/author/author-img4.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="admin-assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="admin-assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="admin-assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index2.html">Home</a></li>
                                <li><span>Backup</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="admin-assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
                <div class="main-content-inner">
                    <div class="row">
                        <div class="col-lg-12 col-ml-12">
                            <div class="row">
                                <!-- Textual inputs start -->
                                <div class="col-lg-12 mt-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Automatic Backup</h4>
                                            <p class="text-muted font-14 mb-4">Set auto back-up your data. We recommend you to regularly back up your database and files to prevent any loss of information.</p>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="form-row">
                                                        <label class="col-form-label">Enable auto-backup:</label>
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
                                                        <label class="col-form-label">Interval:</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <input class="form-control" type="number" value="1" min="1" id="example-text-input">
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <label class="col-form-label">weeks</label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="form-row">
                                                        <label class="col-form-label">Select Database:</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Customer</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">Manager</label>
                                                </div></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">Admin</label>
                                                </div></div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                    <label class="custom-control-label" for="customCheck4">Chatbot</label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6"></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                        <label class="custom-control-label" for="customCheck5">Product</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6">Shop</label>
                                                </div></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                    <label class="custom-control-label" for="customCheck7">Shop Business Hours</label>
                                                </div></div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                    <label class="custom-control-label" for="customCheck8">Order</label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6"></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                        <label class="custom-control-label" for="customCheck9">Payment</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                    <label class="custom-control-label" for="customCheck10">Table</label>
                                                </div></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                    <label class="custom-control-label" for="customCheck11">Cart</label>
                                                </div></div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                    <label class="custom-control-label" for="customCheck12">Review</label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6"></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                        <label class="custom-control-label" for="customCheck13">Delivery</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                    <label class="custom-control-label" for="customCheck14">Promotion</label>
                                                </div></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                    <label class="custom-control-label" for="customCheck15">FAQ</label>
                                                </div></div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck16">
                                                    <label class="custom-control-label" for="customCheck16">Logs</label>
                                                </div>
                                            </div><br>
                                            <div class="col-lg-12 mt-5" style="text-align: right;">
                                                <button type="button" class="btn btn-primary mb-3">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Textual inputs end -->
                                <!-- button with dropdown start -->
                                <div class="col-lg-12 mt-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Manual Backup</h4>
                                            <p class="text-muted font-14 mb-4">Set manually back-up your data.</p>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="form-row">
                                                        <label class="col-form-label">Select Database:</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Customer</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">Manager</label>
                                                </div></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">Admin</label>
                                                </div></div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                    <label class="custom-control-label" for="customCheck4">Chatbot</label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6"></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                        <label class="custom-control-label" for="customCheck5">Product</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6">Shop</label>
                                                </div></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                    <label class="custom-control-label" for="customCheck7">Shop Business Hours</label>
                                                </div></div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                    <label class="custom-control-label" for="customCheck8">Order</label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6"></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                        <label class="custom-control-label" for="customCheck5">Payment</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6">Table</label>
                                                </div></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                    <label class="custom-control-label" for="customCheck7">Cart</label>
                                                </div></div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                    <label class="custom-control-label" for="customCheck8">Review</label>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6"></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                        <label class="custom-control-label" for="customCheck5">Delivery</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6">Promotion</label>
                                                </div></div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                    <label class="custom-control-label" for="customCheck7">FAQ</label>
                                                </div></div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                    <label class="custom-control-label" for="customCheck8">Logs</label>
                                                </div>
                                            </div><br>
                                            <form action="{{ url('backup/create') }}" method="GET" class="add-new-backup" enctype="multipart/form-data" id="CreateBackupForm">
                                            <div class="col-lg-12 mt-5" style="text-align: right;">
                                                <input type="submit" name="submit" class="btn btn-primary mb-3" value="Create Database Backup">
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- button with dropdown end -->
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script type="text/javascript">
        $("#CreateBackupForm").on('submit',function(e){
            $('.theme-button').attr('disabled','disabled');
        });
    </script>
</body>

</html>
