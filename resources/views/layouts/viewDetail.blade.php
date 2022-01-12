@include('include.header')

<!-- preloader area start -->

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
                <div class="col-sm-6 clearfix">
                    <div class="user-profile pull-right">
                        <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Salim Kasim<i
                                class="fa fa-angle-down"></i></h4>
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
                <div class="col-12 mt-5">
                    <div class="row">
                        <!-- Textual inputs start -->
                        <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Product Details</h4>
                                    <img src = "{{asset('images/'. $product->P_Image)}}" class="center">
                                    <div class="single-table">
                                        <div class="table-responsive">
                                            <table class="table text-center">
                                                    <tr>
                                                        <th class="text-uppercase bg-light" scope="col">Name</th>
                                                        <td>{{ $product->P_Name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-uppercase bg-light" scope="col">Price</th>
                                                        <td>RM
                                                            {{ number_format((float) $product->P_Price, 2, '.', '') }}
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <th class="text-uppercase bg-light" scope="col">Discount Price</th>
                                                        <td><?php
                                                            if (!$product->P_Disc_Price == 0) {
                                                                echo 'RM ' . number_format((float) $product->P_Disc_Price, 2, '.', '') . '';
                                                            } else {
                                                                echo '';
                                                            }
                                                            ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-uppercase bg-light" scope="col">Duration</th>
                                                        <td>{{ $product->P_Duration }} Minutes</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-uppercase bg-light" scope="col">Quantity</th>
                                                        <td>{{ $product->P_Quantity }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-uppercase bg-light" scope="col">Short Description</th>
                                                        <td>{{ $product->S_Description }} </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-uppercase bg-light" scope="col">Long Description</th>
                                                        <td>{{ $product->L_Description }} </td>
                                                    </tr>
                                            </table>
                                            <a class="btn btn-danger" style=" margin-right: 10px; margin-top: 10px"
                                            href="{{ route('catalogues.index') }}">Back</a>
                                        </div>
                                    </div>
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

    <!-- footer area start-->
    <footer>
        @include('include.footer')
    </footer>
    <!-- footer area end-->
</div>
<!-- page container area end -->
