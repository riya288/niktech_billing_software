<?php
$messaage='
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Print A4 Blog</title>
   </head>
   <style type="text/css">
      /* Both z-index are resolving recursive element containment */
      [background-color] {
      z-index: 0;
      position: relative;
      -webkit-print-color-adjust: exact !important;
      }
      [background-color] canvas {
      display: block;
      position:absolute;
      z-index: -1;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%; 
      }
      @media all{
      body{
      background-color: white;
      padding: 15px;
      }
      #break{
      page-break-before: always;
      }
      }
      .blue-back span{
      
      color:white !important;

      -webkit-print-color-adjust: exact; 
      }
      .blue-back{
      background-color: #004990 !important;
      

      -webkit-print-color-adjust: exact; 
      }

   </style>
   <link rel="stylesheet" href="../public/assets/css/style.css" media="print">
   <link rel="stylesheet" href="../public/assets/css/style.css" media="screen">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <body style="font-family: calibri !important;font-size:16px !important;">
   
   <div class="container" style="padding-top: 5px;">
      <div class="row bb-1 bt-1 br-1 bl-1">
         <div class="col-md-4 col-xs-4">
          <div class="col-md- col-xs-8 fwb f-20  m-b-16 pull-left blue-back" style="border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;"><span class="pull-center" >&nbsp;&nbsp;&nbsp;&nbsp;ORIGINAL</span></div>
            <img src="../images/logo_nk.png"  style="width:100%;margin-top:10%;">
         </div>
         <div class="col-md-8 col-xs-8">
            <div class="row">
               <div class="col-md-8 col-xs-8 fwb f-20  m-b-16 pull-right blue-back" style="border-bottom-left-radius: 15px;"><span class="pull-right" >GST TAX INVOICE-'.$book_no.'</span></div>
            </div>
            <div class="row">
               <div class="pull-right" style="padding-right: 10px;">
                  <p>TF-9A, Lotus Aura,Opp.Lileria Party Plot,Sama Savli Rd,Vadodara-08</p>
               </div>
            </div>
            <div class="row">
               <div class="pull-right" style="padding-right: 10px;">
                  <p>M : 9429812012 | 9773113554</p>
               </div>
            </div>
            <div class="row">
               <div class="pull-right" style="padding-right: 10px;">
                  <p>E : info@niktechsolution.com</p>
               </div>
            </div>
            <div class="row">
               <div class="pull-right" style="padding-right: 10px;">
                  <p>GST : 24BSPPP2356E1ZM</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row br-1 bl-1 bb-1">
         <div class="col-md-8 col-xs-8 br-1" style="padding-left: 30px; padding-right: 30px;">
            <div class="row">
               <div style="font-weight: bold;padding-top: 5px;">BILLED TO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$bill_to.'</div>
            </div>
            <div class="row"  style="padding-top: 16px;">
               <div style="width:17%; display:inline;">Company&nbsp;&nbsp; :</div>
               <div class="b-b-1_line" style="width:83%; display:inline; float: right;">&nbsp;'.$company.'</div>
            </div>
            <div class="row">
               <div style="width:17%; display:inline;">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</div>
               <div class="b-b-1_line" style="width:83%; display:inline; float: right;">&nbsp;'.$address.'</div>
            </div>
            <div class="row">
               <div style="width:17%; display:inline;">State Code :</div>
               <div class="b-b-1_line" style="width:83%; display:inline; float: right;">&nbsp;'.$state_code.'</div>
            </div>
            <div class="row" style="padding-bottom: 20px;">
               <div style="width:17%; display:inline;">GST No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</div>
               <div class="b-b-1_line" style="width:83%; display:inline; float: right;">&nbsp;'.$gst_no.'</div>
            </div>
         </div>
         <div class="col-md-4 col-xs-4" style="padding-left: 30px; padding-right: 30px;padding-top: 40px;">
            <div class="row" style="padding-top: 5px;">
               <div style="width:40%; display:inline;">Invoice No. &nbsp;:</div>
               <div class="b-b-1_line" style="width:60%; display:inline; float: right;text-align: right;">&nbsp;'.$book_no.'</div>
            </div>
            <div class="row" style="padding-top: 5px;">
               <div style="width:40%; display:inline;">Invoice Date :</div>
               <div class="b-b-1_line" style="width:60%; display:inline; float: right;text-align: right;">&nbsp;'.$invoice_date.'</div>
            </div>
            <div class="row" style="padding-top: 5px;">
               <div  style="width:40%; display:inline;">P.O. Number :</div>
               <div class="b-b-1_line" style="width:60%; display:inline; float: right;text-align: right;">&nbsp;'.$p_o_no.'</div>
            </div>
         </div>
      </div>
   </div>
   <div class="container bb-1 bl-1 br-1">
      <table style="padding:5px;margin-top: 10px;">
        
         <thead>
            <th style="width:5%;padding: 2px;">Sr. No.</th>
            <th style="width:40%;padding: 2px;">Description</th>
            <th style="width:10%;padding: 2px;">Qty.</th>
            <th style="width:15%;padding: 2px;">Rate</th>
            <th style="width:15%;padding: 2px;">Tax</th>
            <th style="width:20%;padding: 2px;">Amount</th>
         </thead>
         <tbody>
               
            <tr>
               <td style="width:5%;padding: 2px;"></td>
               <td style="width:40%;padding: 2px;">'.$result[$i][0].'</td>
               <td style="width:10%;padding: 2px;">'.$result[$i][1].'</td>
               <td style="width:15%;padding: 2px;">'.$result[$i][2].'&nbsp;&nbsp;&nbsp;&nbsp;'.$symbol.'</td>
               <td style="width:15%;padding: 2px;">'.$result[0][3].'</td>
               <td style="width:20%;padding: 2px;">'.$result[$i][4].'&nbsp;&nbsp;&nbsp;&nbsp;'.$symbol.'</td>
            </tr>
            <tr>
               
               <td rowspan="3" colspan="5">
                  <div class="row">
                     <div class="col-md-12 col-xs-12">
                        <div class="col-md-9 col-xs-9" style="font-weight: bold;">BANK DETAILS:</div>
                        
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-xs-12">
                        <div class="col-xs-9 col-md-9">
                           <div class="row">
                              <div class="col-md-4 col-xs-4">Bank Name&nbsp;:</div>
                              <div class="col-md-5 col-xs-5"> Axis Bank</div>
                            </div>
                            <div class="row">
                              <div class="col-md-4 col-xs-4">A/C No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div>
                              <div class="col-md-5 col-xs-5"> 920020055689800</div>
                           </div>
                            <div class="row">
                              <div class="col-md-4 col-xs-4">A/C Name&nbsp;&nbsp;&nbsp;:</div>
                              <div class="col-md-5 col-xs-5"> Niktech Solution</div>
                            </div>
                            <div class="row">
                              <div class="col-md-4 col-xs-4">IFSC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div>
                              <div class="col-md-5 col-xs-5">UTIB0003818</div>
                           </div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="col-md-6 col-xs-6">GST@</div>
                           <div class="col-md-6 col-xs-6 b-b-1_line">'.$total_gst.'%</div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="col-md-6 col-xs-6"></div>
                           <div class="col-md-6 col-xs-6">&nbsp;</div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="col-md-12 col-xs-12 pull-right" style="font-weight: bold;text-align: right;">GRAND TOTAL</div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-xs-12">
                        
                        
                     </div>
                  </div>
               </td>
               <td style="text-align: center;"></td>
            </tr>
            <tr>
               <td style="text-align: center;">&nbsp;'.$gst.'&nbsp;&nbsp;&nbsp;&nbsp;'.$symbol.'</td>
            </tr>
            <tr>
               <td style="text-align: center;">'.$total.'&nbsp;&nbsp;&nbsp;&nbsp;'.$symbol.'</td>
            </tr>
            <tr>
               <td colspan="6">
                  <div class="row">
                     <div class="col-md-12 col-xs-12">
                        <div class="col-md-3 col-xs-3">Rupees in word:</div>
                        <div class="col-md-8 col-xs-8">'.$rs_word.'</div>
                     </div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <div class="col-md-12 col-xs-12 b-b-1_line b-r-1 b-l-1 b-t-1" style="margin-bottom: 20px; margin-top: 20px;">
         <div class="col-md-8 col-xs-8 b-r-1">
            <div class="row">
               <div class="pull-left" style="font-weight: bold;">
                  <p>Terms & Condition</p>
               </div>
            </div>
            <div class="row">
               <div class="pull-left">
                  <p> '. html_entity_decode($name).'</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-xs-4">
            <div class="row">
               <div class="col-md-12 col-xs-12" style="font-weight: bold;">
                  <p>For Nik Tech Solution</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-xs-12">
                <img src="">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-xs-12" style="font-weight: bold;">
                  <p>Proprietor</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <div class="row">
      <div class="col-md-12 col-xs-12">
         <div align="center">
            <div class="hidden-print">
               <a href="javascript:window.print()"><button class="btn btn-lg btn-primary" style="font-weight: bold;font-size: 20px;margin-top: 30px; width: 100%"><i class="fa fa-print">&nbsp;&nbsp;&nbsp;&nbsp;Print Pdf</i></button></a>
            </div>
         </div>
      </div>
   </div>
   <!-- </div> -->
   </body>
</html>
';
?>
