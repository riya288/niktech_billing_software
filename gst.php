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
    $query = "DELETE FROM gst WHERE id = '$id'";
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
    $query = "SELECT * FROM gst WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $cgst = $row['cgst'];
        $sgst = $row['sgst'];
        $total_gst = $row['total_gst'];
    }
}
?>
<!DOCTYPE html>
<html>
<style>
      .form-group{
    position:relative;
}
.static-value{
    position:absolute;
    left:60px;
    font-weight:bold;
    font-size:18px;
    color:#444;
    top:30px;
}
</style>
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
                                    <h4 class="page-title">GST Detail
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
                                    <form name="form" action="action/gst.php/" id="form" method="post"    enctype="multipart/form-data">
                                         <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label for="tax">Tax Name<span class="text-danger">*</span></label>
                                          <input type="text" id="tax" name="tax" class="form-control" onkeyup="myfunction()">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label for="cgst">CGST<span class="text-danger">*</span></label>
                                          <input type="text" id="cgst" value="0" name="cgst" class="form-control" onkeyup="myfunction()">
                                        </div>
                                    </div>
                                   <div class="col-md-2">
                                      <div class="form-group">
                                          <label for="sgst">SGST<span class="text-danger">*</span></label>
                                          <input type="text" name="sgst" value="0" id="sgst" class="form-control" onkeyup="myfunction()">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label for="total_gst">Total GST<span class="text-danger">*</span></label>
                                          <input type="text" name="total_gst" id="total_gst" class="form-control" readonly>
                                          <input type="hidden" name="check" value="<?php if (isset($id) &&!empty($id)) { echo $id; } ?>">
                                        </div>
                                    </div>
                                     <div class="col-md-2" align="right">
                                          <button type="submit" name="submit" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5 m-t-25" id="submit_completed">Submit</button>
                                       </div>
                                  </div>
                                 </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      <?php require_once('view_gst.php');?>
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

<script>
  $("#hide").hide();
  jQuery('.add').click(function(event) {
                   $("#hide").slideToggle();
                   $("#show").slideToggle();   

                }); 
  

</script>
<script>
  function myfunction(){
    var cgst=$("#cgst").val();
    var sgst=$("#sgst").val();
    var total_gst = parseFloat(cgst)+parseFloat(sgst);
    $("#total_gst").val(total_gst);
  }
</script>
    </body>
</html>