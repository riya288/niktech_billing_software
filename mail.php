 <?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/config.php');
include_once('include/flashMessage.php');
include_once('include/input_validation.php');
$msg = new FlashMessages();
$queryDeleteSccess = 0;
$queryDeleteError = 0;
$datainsertsuccess =0;
$datainserterror =0;
$dataupdatesuccess = 0;
$dataupdateerror = 0;

if (isset($_GET['mId']) && !empty($_GET['mId'])) {
    $id = input_validate($_GET['mId']);
    
}

?>
<!DOCTYPE html>
<html>
<?php require_once('include/headerscript.php'); ?>
<body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <?php require_once('include/topbar.php'); ?>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <?php require_once('include/sidebar.php'); ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 p-l-0 p-r-0">
                            <?php
                            //Display the flash message.
                            if($datainsertsuccess == 1)   
                            {
                                $msg->success("Data Inserted successfully..");
                                $msg->display();
                            }
                            else if($datainserterror == 1)
                            {
                                $msg->error("oopss!!!error..");
                                $msg->display();
                            }
                            
                            ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-sm-8">
                                    <div class="card-box m-t-20">
                                        <div class="">
                                            <form role="form" id="form" action="action/mail.php?mail_id=<?php echo $id; ?>" method="post">
                                                <div class="form-group">
                                                    <input type="email" value="" name="mail_to"  id="mail_to" class="form-control" placeholder="To">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="email" value="" name="cc" id="cc" class="form-control" placeholder="Cc">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="email" id="bcc" value="" name="bcc" class="form-control" placeholder="Bcc">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" value="" name="subject" class="form-control" placeholder="Subject">
                                                    </div>

                                                        <div class="btn form-group m-b-0">
                                                            <div class="pull-right">
                                                                        <button type="submit" name="submit" id="submit" class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
            <!-- ============================================================== -->
            <!-- End of the page -->
            <!-- ============================================================== -->
                </div> <!-- container -->
            </div> <!-- content -->
        </div>
        <!-- END wrapper -->
        <!-- START Footerscript -->
        <?php require_once('include/footerscript.php'); ?>
        <script>
    $(document).ready(function(){
       $('#form').submit(function(event){
                $.ajax({
                type: $('#form').attr('method'),
                 url: $('#form').attr('action'),
                data: $('#form').serialize(),
                success:function myFunction() {
                    swal("Done!", "Data successfully Inserted... ", "success");
                    },
                error: function (msg) {
                    swal("not Done!", "It was not Inserted !", "error");
                    }
            });
       });
    });
</script>
    </body>
</html>