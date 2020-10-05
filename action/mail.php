<?php

    include '../include/constant.php';

    include '../include/connection.php';

    include '../include/function.php';

    include '../include/config.php';

    include '../include/input_validation.php';
if(isset($_POST['submit'])){
    if (isset($_GET['mail_id']) && !empty($_GET['mail_id'])) {
    $id = input_validate($_GET['mail_id']);
    $query = "SELECT * FROM bill WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
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
        $type = "INVOICE";
    }
    $query2 = "SELECT * FROM curency WHERE cname = '$curency'";
    $result2 = mysqli_query($connect, $query2);
    if (mysqli_num_rows($result2) > 0) {
        $row2 = mysqli_fetch_assoc($result2);
        $id = $row2['id'];
        $symbol = $row2['symbol'];
    }
    $query3 = "SELECT * FROM gst WHERE tax = '$tax'";
    $result3 = mysqli_query($connect, $query3);
    if (mysqli_num_rows($result3) > 0) {
        $row3 = mysqli_fetch_assoc($result3);
        $id = $row3['id'];
        $total_gst = $row3['total_gst'];
    }
    $query4 = "SELECT * FROM term_condition ";
    $result4 = mysqli_query($connect, $query4);
    if (mysqli_num_rows($result4) > 0) {
        $row4 = mysqli_fetch_assoc($result4);
        $id = $row4['id'];
        $name = $row4['name'];
    }
}
    if (isset($_GET['mail_id2']) && !empty($_GET['mail_id2'])) {
    $id = input_validate($_GET['mail_id2']);
    $query = "SELECT * FROM quotation WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
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
        $type = "QUOTATION";
    }
    $query2 = "SELECT * FROM curency WHERE cname = '$curency'";
    $result2 = mysqli_query($connect, $query2);
    if (mysqli_num_rows($result2) > 0) {
        $row2 = mysqli_fetch_assoc($result2);
        $id = $row2['id'];
        $symbol = $row2['symbol'];
    }
    $query3 = "SELECT * FROM gst WHERE tax = '$tax'";
    $result3 = mysqli_query($connect, $query3);
    if (mysqli_num_rows($result3) > 0) {
        $row3 = mysqli_fetch_assoc($result3);
        $id = $row3['id'];
        $total_gst = $row3['total_gst'];
    }
    $query4 = "SELECT * FROM term_condition ";
    $result4 = mysqli_query($connect, $query4);
    if (mysqli_num_rows($result4) > 0) {
        $row4 = mysqli_fetch_assoc($result4);
        $id = $row4['id'];
        $name = $row4['name'];
    }
}

      $date = date("Y-m-d h:i:s");

      $mail_to = $_POST['mail_to'];

      $cc = $_POST['cc'];

      $bcc = $_POST['bcc'];

      $subject = $_POST['subject'];

              $peice =explode("\n",$description);
               $peice2 =explode("\n",$qty);
               $peice3 = explode("\n",$rate);
               $peice5 = explode("\n", $amount);
               $count = count($peice);
               for ($i=0; $i < $count-1; $i++) { 
                $j=$i+1;
                $row .= '<tr>
               <td style="width:5%;padding: 2px;text-align:center;">'.$j.'</td>
               <td style="width:40%;padding: 2px;">'.$peice[$i].'</td>
               <td style="width:10%;padding: 2px;text-align:center;">'.$peice2[$i].'</td>
               <td style="width:15%;padding: 2px;text-align:right;">'.$symbol.'&nbsp;&nbsp;&nbsp;&nbsp;'.$peice3[$i].'</td>
               <td style="width:15%;padding: 2px;text-align:center;">'.$tax.'</td>
               <td style="width:20%;padding: 2px; text-align:right;">'.$symbol.'&nbsp;&nbsp;&nbsp;&nbsp;'.$peice5[$i].'</td>
            </tr>';
          }

        include 'email_pdf.php';

        $from ="patelria288@gmail.com";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: '.$from. "\r\n";
        $headers .= 'Cc: '.$cc. "\r\n";
        $headers .= 'Bcc: '.$bcc. "\r\n"; 

        mail($mail_to,$subject,$messaage,$headers);
        
        echo $messaage;exit;

        print_r($_POST);exit;

        //header('location: '.$location.'mail.php'); 

      } 

?>

