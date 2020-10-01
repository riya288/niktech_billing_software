<?php
 include 'include/connection.php';

$query = "SELECT bill.*,gst.*,term_condition.* FROM bill,gst,term_condition ";
$result = mysqli_query($connect, $query);
       print_r($result);
        $row = mysqli_fetch_assoc($result);
           $bill_to = $row['bill_to'];
           $company = $row['company'];
           $address = $row['address'];
           $state_code = $row['state_code'];
           $gst_no = $row['gst_no'];
           $book_no = $row['book_no'];
           $orgDate = $row['invoice_date'];
           $invoice_date = date("d-m-Y", strtotime($orgDate));
           $p_o_no = $row['p_o_no'];
           $description = $row['description'];
           $qty = $row['qty'];
           $rate = $row['rate'];
           $amount = $row['amount'];
           $tax = $row['tax'];
           $gst = $row['gst'];
           $total = $row['total'];
           $curency = $row['curency'];
           $rs_word = $row['rs_word'];
           $name= $row['name'];
           echo $name;
?>