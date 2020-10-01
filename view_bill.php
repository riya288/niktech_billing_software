<?php
// Include the files which is used for this module.
include_once('include/connection.php');
include_once('include/config.php');
include_once('include/session.php');
include_once('include/flashMessage.php');
include_once('include/input_validation.php');
// create object for flash message
$msg = new FlashMessages();
$queryDeleteSccess = 0;
$queryDeleteError = 0;
if(isset($_GET['dId'])){
    $id = $_GET['dId'];
    $query = "DELETE FROM bill WHERE id = '$id'";
      $result = mysqli_query($connect,$query);
}
?>
<!DOCTYPE html>
<html>
<style>
    table.dataTable>tbody>tr.child ul {
    width: 100%;
}
</style>
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
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">View Inquiry</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li class="active">
                                            View Inquiry
                                        </li>
                                         <li>
                                            View career
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 p-l-0 p-r-0">
                            <?php
                          
                            ?>
                          </div>
                        </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="card-box table-responsive">
                                    
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Bill to</th>
                                            <th>Company</th>
                                            <th>Description</th>
                                            <th>Total</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $query = "SELECT * FROM bill ORDER BY id DESC";  
                                        $result = mysqli_query($connect,$query);
                                        if(mysqli_num_rows($result)>0)
                                        {
                                          $i = 1;
                                          while($row = mysqli_fetch_assoc($result))
                                          {
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                <?php
                                                if(isset($row['bill_to']) && !empty($row['bill_to']))
                                                {
                                                    echo $row['bill_to']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['company']) && !empty($row['company']))
                                                {
                                                    echo $row['company']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['description']) && !empty($row['description']))
                                                {
                                                    echo $row['description']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['total']) && !empty($row['total']))
                                                {
                                                    echo $row['total']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['dt_created']) && !empty($row['dt_created']))
                                                {
                                                    echo $row['dt_created'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="get_pdf.php?pId=<?php if (isset($row['id']) &&
                                                        !empty($row['id'])) {echo $row['id'];} ?>" title="pdf">
                                                        <i class="fa fa-print" style="font-size: 20px;"></i>
                                                        </a>
                                                
                                                <a href="bill.php?hId=<?php if (isset($row['id']) &&
                                                        !empty($row['id'])) {echo $row['id'];} ?>" title="Edit">
                                                        <i class="fa fa-edit" style="font-size: 20px;"></i>
                                                        </a>
                                                 <a href="view_bill.php?dId=<?php if(isset($row['id']) && !empty($row['id'])){ echo $row['id']; }?>" onClick="return confirm('Are you sure you want to delete this record');" title="Delete">
                                                            <i class="fa fa-trash" style="font-size: 20px;"></i>
                                                        </a>
                                            </td>
                                        </tr>
                                        <?php
                                            $i++;
                                            } 
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div> <!-- container -->
                </div> <!-- content -->
            </div>
            <!-- ============================================================== -->
            <!-- End of the page -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <!-- START Footerscript -->
        <?php require_once('include/footerscript.php'); ?>
         <script type="text/javascript">
            $(document).ready(function () {
              
                 $("#datatable").DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [ 1,2,3,4,5 ]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                    }
                ]
            } );
            });
         </script> 
    </body>
</html>