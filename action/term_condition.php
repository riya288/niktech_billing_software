<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    
    $query = "SELECT * FROM term_condition";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM term_condition WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            $name = $_POST['name'];
              $queryUpdate = mysqli_query($connect,"UPDATE term_condition SET name='$name',dt_updated='$date' WHERE id ='$id'");
          }
          header('location: '.$location.'term_condition.php'); 
        }else{
          $name = $_POST['name'];
            
          $query=mysqli_query($connect,"INSERT INTO term_condition( name,dt_created) VALUES ('$name','$date')");

        }
    header('location: '.$location.'term_condition.php'); 
  } 
?>
