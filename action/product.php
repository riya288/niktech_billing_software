<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    
    $query = "SELECT * FROM product";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM product WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            $product = $_POST['product'];
            $rate = $_POST['rate'];
              $queryUpdate = mysqli_query($connect,"UPDATE product SET product='$product',rate='$rate',dt_updated='$date' WHERE id ='$id'");
          }
          header('location: '.$location.'product.php'); 
        }else{
            $product = $_POST['product'];
          $rate = $_POST['rate'];
            
          $query=mysqli_query($connect,"INSERT INTO product( product,rate,dt_created) VALUES ('$product','$rate','$date')");

        }
    header('location: '.$location.'product.php'); 
  } 
?>
