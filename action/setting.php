<?php

// Include the files which is used for this module.
include_once('../include/connection.php');
include_once('../include/config.php');
include_once('../include/session.php');
include_once('../include/flashMessage.php');
include_once('../include/input_validation.php');

if (isset($_POST['submit'])) {
    $date = date("Y-m-d h:i:s");
     $logo = null;
        if(isset($_FILES["logo"]["name"]) && !empty($_FILES["logo"]["name"]))
        {
          $target_dir = "../../images/";
          $uniq = uniqid();
          $target_file = $target_dir.basename($uniq.$_FILES["logo"]["name"]);
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")      {
            echo "<script>alert('Please upload only image file...');</script>";
          }
          else
          { 
            if(move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) 
            {
              $logo = $target_file;
            }
            else
            {
              echo "<script>alert('Sorry, Image was not uploaded due to some problem. Please upload image again...');</script>";
            } 
          }
        }
         $bg = null;
        if(isset($_FILES["bg"]["name"]) && !empty($_FILES["bg"]["name"]))
        {
          $target_dir = "../../images/";
          $uniq = uniqid();
          $target_file = $target_dir.basename($uniq.$_FILES["bg"]["name"]);
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")      {
            echo "<script>alert('Please upload only image file...');</script>";
          }
          else
          { 
            if(move_uploaded_file($_FILES["bg"]["tmp_name"], $target_file)) 
            {
              $bg = $target_file;
            }
            else
            {
              echo "<script>alert('Sorry, Image was not uploaded due to some problem. Please upload image again...');</script>";
            } 
          }
        }
        print_r($_POST);
        $queryInsert = mysqli_query($connect,"INSERT INTO setting (logo,bg,dt_created) VALUES ('$logo','$bg','$date')");
        print_r($queryInsert);
    //header('location: '.$location.'../setting.php');
}
