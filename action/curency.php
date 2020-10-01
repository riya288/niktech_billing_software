<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    
    $query = "SELECT * FROM curency";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM curency WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            $name = $_POST['name'];
            $symbol = $_POST['symbol'];
              $queryUpdate = mysqli_query($connect,"UPDATE curency SET name='$name',symbol='$symbol',dt_updated='$date' WHERE id ='$id'");
          }
          header('location: '.$location.'curency.php'); 
        }else{
            $name = $_POST['name'];
          $symbol = $_POST['symbol'];
            
          $query=mysqli_query($connect,"INSERT INTO curency( name,symbol,dt_created) VALUES ('$name','$symbol','$date')");

        }
    header('location: '.$location.'curency.php'); 
  } 
?>
