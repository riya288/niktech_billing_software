<?php

// Include the files which is used for this module.
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/flashMessage.php');
include_once('include/config.php');

// create object for flash message
$msg = new FlashMessages();
 
$insertSccess = 0;
$insertError = 0;

// Add/Update aboutus details 
if (isset($_POST["submit"]))
{
    if(isset($_FILES["clientLogo"]["tmp_name"]) && !empty($_FILES["clientLogo"]["tmp_name"]))
    {
       //$error=array();
        $target_dir = $client_logotarget;
        
        $images = null;

        // Allowed file extensions
        $extension=array("jpeg","jpg","png");
        foreach($_FILES["clientLogo"]["tmp_name"] as $key=>$tmp_name)
        {
            $uniq = uniqid();
            $target_file = $target_dir.basename($uniq.$_FILES["clientLogo"]["name"][$key]);
            $ext=pathinfo($_FILES["clientLogo"]["name"][$key],PATHINFO_EXTENSION);

            if(in_array($ext,$extension))
            {
                if(!file_exists($target_file))
                {
                    move_uploaded_file($_FILES["clientLogo"]["tmp_name"][$key],$target_file);
                    $images = $target_file;
                }
                else
                {   $file = $_FILES["clientLogo"]["name"][$key];
                    echo "<script>var file = '<?php echo $file; ?>';alert('File already exists '+file);</script>";
                }
            }
            else
            {
                //array_push($error,"$file_name, ");
                echo "<script>alert('Please upload only jpeg, jpg, and png image');</script>";
            }
            $query = "INSERT INTO client_logo(image) values('$images')";
            $res = mysqli_query($connect,$query);
        }

      
            
      

        if($res)
        {
            $insertSccess = 1;
        }
        else
        {
            $insertError = 1;
        }
    }
    else
    {
        echo "<script>alert('Please upload image');</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<?php include_once('include/headerscript.php'); ?>
<body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include_once('include/topbar.php'); ?>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once('include/sidebar.php'); ?>
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
                                    <h4 class="page-title">Add Client Logo</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Client</a>
                                        </li>
                                        <li class="active">
                                            Add Client Logo
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 p-l-0 p-r-0">
                            
                            <?php
                            // Display the flash message.
                            if(isset($insertSccess) && $insertSccess == 1)   
                            {
                                $msg->success("Files uploaded successfully");
                                $msg->display();
                            }
                            else if(isset($insertError) && $insertError == 1)
                            {
                                $msg->error("Files not uploaded due to error");
                                $msg->display();
                            }
                            ?>

                            </div>
                        </div>
                        <form name="uploadClientLogo" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="row card-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>Upload Client Logo</label>
                                        <input type="file" name="clientLogo[]" class="form-control" placeholder="Please Choose Image" multiple="" required="">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">
                                             Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                        </form>
                        <!-- <a href="view_client_logo.php">View Client Logo</a> -->
                        <?php include 'view_client_logo.php'; ?>
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

    </body>
</html>