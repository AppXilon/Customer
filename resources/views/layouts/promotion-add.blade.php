<?php include 'include/header.php'; ?>

<body>
    
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- page container area start -->
    <div class="page-container">
        
        <!-- sidebar menu area start -->
        <?php include 'include/sidebar.php'; ?>
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">

            <!-- header area start -->
            <?php include 'include/header_area.php'?> 
            <!-- header area end -->

            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Add Promotion</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.html">Home</a></li>
                                <li><span>Promotion</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Salim Kasim<i class="fa fa-angle-down"></i></h4>
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
                                      

                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " enctype="multipart/form-data">
                                            <h4 class="header-title">Add Question</h4>
                                            
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="M_Id">Manager ID:</label>
                                                    <input type="text" class="form-control" id="FAQ_Question" placeholder="Manager ID" aria-describedby="inputGroupPrepend" name="M_Id" Required>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="PR_Name">Promotion Name:</label>
                                                    <input type="text" class="form-control" id="PR_Name" placeholder="Promotion Name" aria-describedby="inputGroupPrepend" name="PR_Name" Required>
                                                </div>
                                            </div>


                                            <!-- <div class="control-group">
                                                <label for="cars">Question Category</label>
                                                <select id="cars" name="FAQ_Category" required="required" class="form-control">
                                                    <option value="General">General</option>
                                                    <option value="Order">Order</option>
                                                    <option value="Profile">Profile</option>
                                                    <option value="Fee">Fee</option>
                                                </select>   
                                                </br>                                             
                                            </div> -->
                                            
                                            
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="PR_Desc">Promotion Description:</label>
                                                    <input type="text" class="form-control" id="FAQ_Question" placeholder="Promotion Description" aria-describedby="inputGroupPrepend" name="PR_Desc" Required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="PR_Desc">Promotion Discount Percentage:</label>
                                                    <input type="text" class="form-control" id="FAQ_Question" placeholder="Promotion Discount Percentage" aria-describedby="inputGroupPrepend" name="PR_Disc" Required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <label for="validationCustomUsername">Image:</label><br>
                                            <input type="file" name="uploadfile" value="" /><br>
                                            </div>
                                            
                                            <button type="submit" style="float: right; margin-right: 10px" class="btn btn-success mb-3" name="save">Add</button>
                                            <button style="float: right; margin-right: 10px" class="btn btn-danger mb-3" onClick="document.location.href='Catalogue.php';">Cancel</button>
                                        </form>


                                        <?php
                                        

                                        // Code to add
                                        if(isset($_POST["save"]))
                                            {
                                            $Category=$_POST["FAQ_Category"];
                                            $Question=$_POST["FAQ_Question"];
                                            $Answer=$_POST["FAQ_Answer"];

                                        //insert value
                                        $sql = "INSERT INTO faq(FAQ_Category,FAQ_Question,C_Phone,FAQ_Answer) values('$Category','$Question','$Answer')";
                                        // Execute query
                                        if (mysqli_query($db, $sql)) {
                                        mysqli_close($db); // Close connection
                                        echo "<script>alert('Question is successfully added ');</script>";

                                        ?>
                                        <script type="text/javascript">
                                        window.location = "login.php";
                                        </script>      
                                         <?php
                                         exit;
                                        } else {
                                        echo "<script>alert('Not register something went worng');</script>";
                                        }
                                    }
 
                                        ?>



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
        <!-- *************************************************************************************************************************-->
        

        <!-- footer area start-->
        <?php include('include/footer.php'); ?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    <!-- offset area start -->
    <?php include('include/offset.php'); ?>
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

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>