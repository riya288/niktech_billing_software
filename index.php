<?php
    include_once('include/session.php');
    include_once('include/connection.php');
?>

<!DOCTYPE html>
<html>
<?php include_once('include/headerscript.php'); ?>
<?php
    $query = "SELECT * FROM bill";
    $result1 = mysqli_query($connect, $query);
    // print_r($result1);exit;
    $count = mysqli_num_rows($result1);
    ?>
<body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include_once('include/topbar.php'); ?>
            <?php include_once('include/config.php'); ?>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once('include/sidebar.php'); ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
          <div class="content-page">
                <!-- Start content -->
             
                        
                        <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">NIK TECH ADMIN PANEL</h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                     <div class="row">
                           <div class="col-lg-3 col-md-3">
                               <a href="view_bill.php" >
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-layers widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Total Invoice</p><br>
                                        <h2><span data-plugin="counterup"><?= $count; ?> </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                       
                                    </div>
                                </div>
                                 </a>
                            </div>
                        </div>
                    </div> <!-- container -->
                </div>
        </div> 
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
        <!-- START Footerscript -->
        <?php include_once('include/footerscript.php'); ?>

    </body>
</html>