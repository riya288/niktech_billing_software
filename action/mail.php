<?php

    include '../include/constant.php';

    include '../include/connection.php';

    include '../include/function.php';

    include '../include/config.php';

    include '../include/input_validation.php';

    

    if(isset($_POST['submit'])){

      $date = date("Y-m-d h:i:s");

      $mail_to = $_POST['mail_to'];

      $cc = $_POST['cc'];

      $bcc = $_POST['bcc'];

      $subject = $_POST['subject'];

      $message = $_POST['message'];


        //include '../get_pdf.php';



        $from ="patelria288@gmail.com";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: '.$from. "\r\n";
        $headers .= 'Cc: '.$cc. "\r\n";
        $headers .= 'Bcc: '.$bcc. "\r\n"; 

        mail($mail_to,$subject,$message,$headers);
        
        //echo $message;exit;

        //print_r($_POST);exit;

        header('location: '.$location.'mail.php'); 

      } 

?>

