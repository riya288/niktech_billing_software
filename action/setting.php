<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
    $logo = null;
      $target_dir = "../../public/assets/images/";
      $uniq = uniqid();
      $target_file = $target_dir.basename($uniq.$_FILES["logo"]["name"]);
      echo $target_file;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      echo $imageFileType;
      if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG")      {
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
     $login_Back = null;
      $target_dir = "../../public/assets/images/";
      $uniq = uniqid();
      $target_file = $target_dir.basename($uniq.$_FILES["login_Back"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG")      {
        echo "<script>alert('Please upload only image file...');</script>";
      }
      else
      { 
        if(move_uploaded_file($_FILES["login_Back"]["tmp_name"], $target_file)) 
        {
          $login_Back = $target_file;
        }
        else
        {
          echo "<script>alert('Sorry, Image was not uploaded due to some problem. Please upload image again...');</script>";
        } 
      }
    print_r($_POST);
          $query=mysqli_query($connect,"INSERT INTO setting (logo,login_Back,dt_created) VALUES('$logo','$login_Back','$date')");
        
    //header('location: '.$location.'../setting.php'); 
  } 
?>
