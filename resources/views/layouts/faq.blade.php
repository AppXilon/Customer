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
                            <h4 class="page-title pull-left">Catalogue</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.html">Home</a></li>
                                <li><span>Catalogue</span></li>
                            </ul>
                        </div>
                    </div>
                    @include('include.managerBar')
                </div>
            </div>
            <!-- page title area end -->
            
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="search-box pull-left">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search..." style="margin: 25px;" required>
                                </form>
                            </div>
                            <div class="card-body">
                                <a href="faq-add.php"><input type="button" value="Add Question" class="button1"></a>
                               
                                <div class="tab-content mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Question</th>
                                                    <th scope="col">Answer</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "SELECT * FROM faq";
                                                $row = mysqli_query($db, $query);

                                                // Check records found or not
                                                if (mysqli_num_rows($row) > 0) {
                                                    while ($fetch = mysqli_fetch_assoc($row)) {
                                                        $Id = $fetch["FAQ_Id"];
                                                        $Category = $fetch["FAQ_Category"];
                                                        $Question = $fetch["FAQ_Question"];
                                                        $Answer = $fetch["FAQ_Answer"];
                                                       
                                                        echo '<tr> 
                                                          <td>' . $Id . '</td>
                                                          <td>' . $Category . '</td>
                                                          <td>' . $Question . '</td>
                                                          <td>' . $Answer . '</td>';
                                                            ?>
                                                        </td>
                                                       
                                                        
                                                        <td>
                                                            <a href="C_edit.php?P_Id=<?php echo $fetch['P_Id']; ?>"><i class="fa fa-edit fa-2x" style="color:#4CAF50"></i></a>
                                                            <a href="c_delete.php?P_Id=<?php echo $fetch['P_Id']; ?>"><i class="fa fa-trash fa-2x" style="color:#f44336; padding: 3px 8px;"></i></a>
                                                        </td>
                                                        </tr> <?php
                                                            }
                                                        } else {
                                                            echo "<tr>";
                                                            echo "<td colspan='4'>No record found.</td>";
                                                            echo "</tr>";
                                                        } ?>
                                            </tbody>
                                        </table>

                                    </div>
                                  
                                    
                                </div>
                            </div>
                        </div>
                        <!-- table primary start -->
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- *************************************************************************************************************************-->
        

        <!-- footer area start-->
        @include('include.footer') 
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    <!-- offset area start -->
    @include('include.offset') 
    <!-- offset area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>