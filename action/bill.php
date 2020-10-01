<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM bill";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $dt_created = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM bill WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
              $bill_to = $_POST['bill_to']; 
              $company = $_POST['company'];
              $address = $_POST['address'];
              $state_code = $_POST['state_code'];
              $gst_no = $_POST['gst_no'];
              $book_no = $_POST['book_no'];
              $invoice_date = $_POST['invoice_date'];
              $p_o_no = $_POST['p_o_no'];
              $description = $_POST['description'];
              $chk9="";  
              foreach($description as $chk1)  
                 {  
                    $chk9.= $chk1."\n";  
                 }  
              
              $qty = $_POST['qty'];
              $chk2="";  
              foreach($qty as $chk)  
                 {  
                    $chk2.= $chk."\n";  
                 }  
              $rate = $_POST['rate'];
              $chk3="";  
              foreach($rate as $chk)  
                 {  
                    $chk3.= $chk."\n";  
                 }  
              $amount = $_POST['amount'];
              $chk4="";  
              foreach($amount as $chk)  
                 {  
                    $chk4.= $chk."\n";  
                 }  
              $total = 0;
              foreach ($amount as $i) {
               $total += $i;
              }
              $tax =$_POST['tax'];
              $gst =$_POST['gst'];
              $grand_total= $_POST['grand_total'];
              $cureny= $_POST['cureny'];
              $rs_word=$_POST['rs_word'];
              $queryUpdate = mysqli_query($connect,"UPDATE bill SET bill_to = '$bill_to',company='$company',address='$address',state_code='$state_code',gst_no='$gst_no',book_no='$book_no',invoice_date='$invoice_date',p_o_no='$p_o_no',description='$chk9',qty='$chk2',rate='$chk3',amount='$chk4',tax='$tax',gst='$gst',total='$grand_total',curency='$curency',rs_word='$rs_word',dt_updated='$dt_created' WHERE id ='$id'");
          }
          header('location: '.$location.'../bill.php'); 
        }
        else{
              $bill_to = $_POST['bill_to']; 
              $company = $_POST['company'];
              $address = $_POST['address'];
              $state_code = $_POST['state_code'];
              $gst_no = $_POST['gst_no'];
              $book_no = $_POST['book_no'];
              $invoice_date = $_POST['invoice_date'];
              $p_o_no = $_POST['p_o_no'];
              $description = $_POST['description'];
              $chk9="";  
              foreach($description as $chk1)  
                 {  
                    $chk9.= $chk1."\n";  
                 }  
              
              $qty = $_POST['qty'];
              $chk2="";  
              foreach($qty as $chk)  
                 {  
                    $chk2.= $chk."\n";  
                 }  
              $rate = $_POST['rate'];
              $chk3="";  
              foreach($rate as $chk)  
                 {  
                    $chk3.= $chk."\n";  
                 }  
              $amount = $_POST['amount'];
              $chk4="";  
              foreach($amount as $chk)  
                 {  
                    $chk4.= $chk."\n";  
                 }  
              $total = 0;
              foreach ($amount as $i) {
               $total += $i;
              }
              $gst =$_POST['gst'];
              $tax =$_POST['tax'];
              $grand_total= $_POST['grand_total'];
              $curency= $_POST['curency'];
              $rs_word=$_POST['rs_word'];
          $query=mysqli_query($connect,"INSERT INTO bill(bill_to,company, address, state_code, gst_no, book_no, invoice_date, p_o_no,description, qty, rate, amount,tax, gst, total,curency,rs_word,dt_created) VALUES ('$bill_to','$company','$address','$state_code','$gst_no','$book_no','$invoice_date','$p_o_no','$chk9','$chk2','$chk3','$chk4','$tax','$gst','$grand_total','$curency','$rs_word','$dt_created')");
        }
    header('location: '.$location.'bill.php'); 
  } 
?>
