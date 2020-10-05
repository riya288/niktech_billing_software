
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
if(isset($_GET['dId'])){
    $id = $_GET['dId'];
    $query = "DELETE FROM curency WHERE id = '$id'";
      $result = mysqli_query($connect,$query);
    if($result){
        $queryDeleteSccess = 1;
    }
    else{
        $queryDeleteError = 1;
    }
}

?>
<?php
if (isset($_GET['hId']) && !empty($_GET['hId'])) {
    $id = input_validate($_GET['hId']);
    $query = "SELECT * FROM curency WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $cname = $row['cname'];
    }
}
?>
<!DOCTYPE html>
<html>

<?php require_once('include/headerscript.php'); ?>
<link href="toastr.css" rel="stylesheet"/>
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
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Currency Detail
                                    </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
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
                        <div class="row card-box">
                            <div class="col-md-12">
                                <div  id="Show_target_div">
                                    <form name="form" action="action/curency.php/" id="form" method="post"    enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 p-5">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="cname">Country name</label>
                                                                    <input type="text" name="cname" id="cname" class="form-control" value="<?php if(isset($cname) && !empty($cname)) {echo $cname;} ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="symbol">Symbol</label>
                                                                    <select name="symbol" id="symbol" class="select2">
                                                                        <option>Please choose</option>
                                                                    <option value="₹">₹</option>
                                                                    <option value="€">€</option>
                                                                    <option value="£">£</option>
                                                                    <option value="$">$</option> 
                                                                    </select>   
                                                                    <input type="hidden" name="check" value="<?php if (isset($id) &&!empty($id)) { echo $id; } ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <center>
                                                                    <button type="submit" name="submit" id="submit" class="btn btn-primary waves-effect waves-light" style="margin-top: 25px;" onclick="myFunction()">Submit</button>
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      <?php require_once('view_curency.php');?>
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