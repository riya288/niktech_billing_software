<?php
   include_once('include/connection.php');
   include_once('include/session.php');
   include_once('include/config.php');
   include_once('include/flashMessage.php');
   include_once('include/input_validation.php');
   
   $msg = new FlashMessages();
   $queryDeleteSccess = 0;
   $queryDeleteError = 0;
   $datainsertsuccess =0;
   $datainserterror =0;
   $dataupdatesuccess = 0;
   $dataupdateerror = 0;
   
   ?> 
<?php
   if (isset($_GET['hId']) && !empty($_GET['hId'])) {
   $id = input_validate($_GET['hId']);
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
   $invoice_date = $row['invoice_date'];
   $p_o_no = $row['p_o_no'];
   $description = $row['description'];
   $qty = $row['qty'];
   $rate = $row['rate'];
   $amount = $row['amount'];
   $total = $row['total'];
   $rs_word=$row['rs_word'];
   }
   }
   ?>
<!DOCTYPE html>
<html>
   <style>
      strong{
      color: red;
      }
      .p-t-70{
      padding-top: 70px;
      }
      .p-b-100{
      padding-bottom: 100px;
      }
      .m-t-20{
      margin-top: 20px;
      }
      .form-group{
      position:relative;
      }
      .static-value{
      position:absolute;
      left:190px;
      font-weight:bold;
      font-size:18px;
      color:#444;
      }
   </style>
   <?php require_once('include/headerscript.php'); ?>
   <body class="fixed-left">
      <!-- Begin page -->
      <div id="wrapper">
      <!-- Top Bar Start -->
      <?php require_once('include/topbar.php'); ?>
      <!-- Top Bar End -->
      <!-- ========== Left Sidebar Start ========== -->
      <?php require_once('include/sidebar.php'); ?>
      <!-- Left Sidebar End -->
      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->
      <div class="content-page">
         <!-- Start content -->
         <div class="content">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="page-title-box">
                        <h4 class="page-title">QUOTATION DETAIL </h4>
                        <ol class="breadcrumb p-0 m-0">
                           <li>
                              <a href="index.php">Home</a>
                           </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 p-l-0 p-r-0">
                     <?php
                        //Display the flash message.
                        if($datainsertsuccess == 1)   
                        {
                        $msg->success("Data Inserted successfully..");
                        $msg->display();
                        }
                        else if($datainserterror == 1)
                        {
                        $msg->error("oopss!!!error..");
                        $msg->display();
                        }
                        
                        ?>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div  id="Show_target_div">
                        <form name="form" action="action/quotation.php/" id="form" method="post"    enctype="multipart/form-data">
                           <div class="row card-box">
                              <div class="col-md-12">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="col-md-9 card-box">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="form-label" for="bill_to">BILLED TO:</label>
                                                <input type="text" name="bill_to" id="bill_to" class="form-control" value="<?php if(isset($bill_to) && !empty($bill_to)) {echo $bill_to;} ?>">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="form-label" for="company">Company/Client:</label>
                                                <input type="text" name="company" id="company" class="form-control" value="<?php
                                                   if(isset($company) &&
                                                    !empty($company)) {
                                                      echo $company;} ?>">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="form-label" for="address">Address:</label>
                                                <textarea name="address" id="address" class="form-control" value=""><?php if (isset($address) && !empty($address)) {echo $address;} ?></textarea>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="form-label" for="state_code">State Code:</label>
                                                <input type="text" name="state_code" id="state_code" class="form-control" value="<?php
                                                   if (isset($state_code) && !
                                                   empty($state_code)) {echo $state_code;} ?>">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="form-label" for="gst_no">GST No.:</label>
                                                <input type="text" name="gst_no" id="gst_no" class="form-control" value="<?php if(isset($gst_no) &&
                                                   !empty($gst_no)) {echo $gst_no;} ?>">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-3 card-box">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Invoice No.:</label>
                                                <?php $query = "SELECT * FROM quotation ORDER BY id DESC";  
                                                   $result = mysqli_query($connect,$query); ?>
                                                <input id="book_no" type="text" class="form-control"  name="book_no" value="<?php          
                                                   if(mysqli_num_rows($result)>0){
                                                       $row = mysqli_fetch_assoc($result);
                                                       echo $row['book_no']+1;}
                                                   else{
                                                       $row['book_no']=101;
                                                       echo $row['book_no'];} ?>" style="padding-left: 80px; padding-top: 13px;" readonly>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label class="form-label" for="invoice_date">Invoice Date:</label>
                                                <input type="date" name="invoice_date" id="invoice_date" class="form-control" value="<?php echo date('d/m/y');?>">
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label class="form-label" for="p_o_no">P.O. Number:</label>
                                                <input type="text" name="p_o_no" id="p_o_no" class="form-control" value="<?php
                                                   if (isset($p_o_no) && !
                                                   empty($p_o_no)) {echo $p_o_no;} ?>">
                                             </div>
                                          </div>
                                       </div>
                                       </div>
                                 </div>
                                 <div class="row">
                                  <div class="col-md-12">
                                    <div class="col-md-12 card-box">
                                       <div class="col-md-12">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="tax">Select Tax<span class="text-danger">*</span></label>
                                                 <select class="form-control select2 select" name="tax" id="tax">
                                                     <option>Please choose</option>
                                                          <?php  $query = "SELECT * FROM gst order by id DESC";
                                                  $result = mysqli_query($connect, $query);
                                                  $i = 1;
                                                  while ($row = mysqli_fetch_assoc($result)) {?>
                                                  <option value="<?php echo $row['tax'];?>"><?php echo $row['tax'];?></option>
                                                  <?php
                                                    $i++;
                                                }
                                                ?>
                                                 </select>
                                             </div>
                                          </div>
                                           <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="userName">Select Curecy<span class="text-danger">*</span></label>
                                                 <select class="form-control select2 select" name="curency" id="curency">
                                                     <option>Please choose</option>
                                                          <?php  $query = "SELECT * FROM curency order by id DESC";
                                                  $result = mysqli_query($connect, $query);
                                                  $i = 1;
                                                  while ($row = mysqli_fetch_assoc($result)) {?>
                                                  <option value="<?php echo $row['cname'];?>"><?php echo $row['cname'];?></option>
                                                  <?php
                                                    $i++;
                                                }
                                                ?>
                                                 </select>
                                             </div>
                                          </div>
                                      </div>
                                    <div class="col-md-10">
                                       <table id="maintable" cellpadding="0" cellspacing="0" width="100%">
                                          <tr>
                                             <th style="text-align: center;">Desciption</th>
                                             <th style="text-align: center;">Qty. </th>
                                             <th style="text-align: center;">Rate </th>
                                             <th style="text-align: center;">Amount </th>
                                          </tr>
                                          <?php   
                                             if (isset($description) && ! empty($description)) {
                                             $peice =explode("\n",$description);
                                             $peice3 = explode("\n",$qty);
                                             $peice4 = explode("\n", $rate);
                                             $peice5 = explode("\n", $amount);
                                             $count = count($peice);
                                             $result=array_map(null,$peice,$peice3,$peice4,$peice5);
                                             for ($i=0; $i < $count-1; $i++) {
                                             ?>
                                          <tr id="rows">
                                             <div  class="col-md-12" style="padding-left: 10px;">
                                                <td style="padding:10px;">
                                                   <input type="text" name="description[]" class="form-control"  value="<?php echo $result[$i][0];?>" />
                                                </td>
                                                <td style="padding:10px;">
                                                   <input type="text" id="qty" name="qty[]" class="form-control count" value="<?php echo $result[$i][1];?>" />
                                                </td>
                                                <td style="padding:10px;">
                                                   <input type="text" name="rate[]" id="rate" class="form-control count"  value="<?php echo $result[$i][2];?>" />
                                                </td>
                                                <td style="padding:10px;">
                                                   <input type="text" name="amount[]" id="amount" class="form-control"  value="<?php echo $result[$i][3];?>" readonly/>
                                                </td>
                                             </div>
                                          </tr>
                                          <?php
                                              }
                                             }
                                             ?>
                                          <tr  id="here">
                                             <div  class="col-md-12" style="padding-left: 10px;">
                                                <td style="padding:10px; width: 300px;">
                                                   <select id="fetch" class="select2" name="description[]" onchange="openPopup()">
                                                      <option>Please choose</option>
                                                          <?php  $query = "SELECT * FROM product order by id DESC";
                                                  $result = mysqli_query($connect, $query);
                                                  $i = 1;
                                                  while ($row = mysqli_fetch_assoc($result)) {?>
                                                  <option value="<?php echo $row['product'];?>"><?php echo $row['product'];?></option>
                                                  <?php
                                                    $i++;
                                                }
                                                ?>
                                                <option data-toggle="modal" data-target="#myModal" style="color: blue;background-color: red;">+ Add new</option>
                                                   </select>
                                                </td>
                                                <td style="padding:10px;">
                                                   <input type="text" id="qty" name="qty[]" class="form-control count" value="0"/>
                                                </td>
                                                <td style="padding:10px;">
                                                   <input type="text" name="rate[]" id="rate" class="form-control count"  value="0"/>
                                                </td>
                                                <td style="padding:10px;">
                                                   <input type="text" name="amount[]" id="amount" class="form-control"  value="0" readonly/>
                                                </td>
                                             </div>
                                          </tr>
                                       </table>
                                    </div>
                                    <div class="col-md-2 p-t-30 p-l-40"> 
                                       <div id="add_new" class="btn btn-primary waves-effect waves-light"><i class="glyphicon glyphicon-plus-sign">&nbsp;Add</i></div>
                                    </div>
                                 </div>
                               </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-12 card-box">
                                      <div class="col-md-4"></div>
                                       <div class="col-md-6 p-t-20">
                                          <div id="count">
                                            <div class="col-md-6 p-l-40">
                                              <div class="col-md-6"><label class="form-label" for="gst">GST&nbsp;&nbsp;&nbsp;@</label></div>                
                                              <div class="col-md-6" id="per_gst" style="border-bottom: 1px solid black;">&nbsp;0
                                              </div>
                                              <label for="gst" class="static-value">%</label>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <input type="text" name="gst" id="gst" class=" form-control" value="" readonly>
                                              </div>
                                            </div>
                                          </div>
                                            <div class="form-group">
                                              <div class="col-md-6 p-l-60">
                                                  <label class="form-label" for="grand_total" style="font-weight: bold;font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grand Total:</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <input type="text" name="grand_total" id="grand_total" class=" form-control" value="" readonly>
                                               </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="col-md-11 p-r-85">
                                                <div class="form-group">
                                                   <label class="form-label" for="rs_word">Rupees in Words:</label>
                                                   <input type="text" name="rs_word" id="rs_word" class="form-control" value="<?php
                                                      if(isset($rs_word) && !
                                                           empty($rs_word)) {echo $rs_word;} ?>">
                                                   <input type="hidden" name="check" value="<?php if (isset($id) &&!empty($id)) { echo $id; } ?>">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div align ="center">
                                          <div class="m-t-70">
                                             <center>
                                                <button type="submit" name="submit" id="submit" class="btn btn-primary waves-effect waves-light" onclick="myFunction()">Submit</button>
                                             </center>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>

               <!-- ============================================================== -->
               <!-- End of the page -->
               <!-- ============================================================== -->
            </div>
            <!-- container -->
         </div>
         <!-- content -->
      </div>
      <!-- END wrapper -->
      <!-- START Footerscript -->
      <?php require_once('include/footerscript.php'); ?>
      <script>
         $(document).ready(function(){
         $('#form').submit(function(event){
         $.ajax({
         type: $('#form').attr('method'),
         url: $('#form').attr('action'),
         data: $('#form').serialize(),
         success:function myFunction() {
         swal("Done!", "Data successfully Inserted... ", "success");
         },
         error: function (msg) {
         swal("not Done!", "It was not Inserted !", "error");
         }
         });
         });
         });
         $(document).on("change",'input[name="qty[]"]',function() {
	         var qty = $(this).val();
	         var rate = $(this).parents('tr').find('input[name="rate[]"]').val();
	         var amount = rate*qty;
	         $(this).parents('tr').find('input[name="amount[]"]').val(amount);
	         var total = 0;
	         $('input[name="amount[]"]').each(function(){
	         total+=parseInt($(this).val()); 
	         });
	         var per_gst=$('#per_gst').text();
	         var gst = (total * parseInt(per_gst))/100;
	         $('input[name="gst"]').val(gst);
	         var grand_total = total + gst + sgst;
	         $('input[name="grand_total"]').val(grand_total);
           var words = new Array();
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    grand_total = grand_total.toString();
    var atemp = grand_total.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Crores ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Lakhs ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
    }
    
$('input[name="rs_word"]').val(words_string);
         });
         $(document).on("change",'input[name="rate[]"]',function() {  
	         var rate = $(this).val();
	         var qty = $(this).parents('tr').find('input[name="qty[]"]').val();
	         var amount = rate*qty;
	         $(this).parents('tr').find('input[name="amount[]"]').val(amount);
	         var total = 0;
	         $('input[name="amount[]"]').each(function(){
	         total+=parseInt($(this).val()); 
	         });
	         var per_gst=$('#per_gst').text();
	         var gst = (total * parseInt(per_gst))/100;
	         $('input[name="gst"]').val(gst);
	         var grand_total = total + gst ;
	         $('input[name="grand_total"]').val(grand_total);
            var words = new Array();
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    grand_total = grand_total.toString();
    var atemp = grand_total.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Crores ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Lakhs ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
    }
    
$('input[name="rs_word"]').val(words_string);
         });
      </script>
      <script>
          $('#tax').on("change",function() {
      var category_id = this.value;
      $.ajax({
        url: "get_gst.php",
        type: "POST",
        data: {
          category_id: category_id
        },
        cache: false,
        success: function(dataResult){
          $("#count").html(dataResult);
        }
      });
  });
    $('#fetch').on("change",function() {
      var category_id = this.value;
      $.ajax({
        url: "get_value.php",
        type: "POST",
        data: {
          category_id: category_id
        },
        cache: false,
        success: function(dataResult){
          $("#here").html(dataResult);
        }
      });
  });
      </script>
      <script>
        function openPopup() {
    $("#myModal").modal();
}
      </script>
      <script>
         $('#add_new').on("click",function() {
      $.ajax({
        url: "get_product.php",
        type: "POST",
        cache: false,
        success: function(dataResult){
          $("#maintable").append(dataResult);
        }
      });
  });
      </script>
      <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <form name="form" action="action/product.php/" id="form" method="post"    enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-md-12 p-5">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-5">
                                              <div class="form-group">
                                                  <label class="form-label" for="product">Product name</label>
                                                    <input type="text" name="product" id="product" class="form-control" value="<?php if(isset($product) && !empty($product)) {echo $product;} ?>">
                                              </div>
                                          </div>
                                          <div class="col-md-5">
                                              <div class="form-group">
                                                  <label class="form-label" for="rate">Product Rate</label>
                                                    <input type="text" name="rate" id="rate" class="form-control" value="<?php if(isset($rate) && !empty($rate)) {echo $rate;} ?>">
                                              </div>
                                          </div>
                                          <div class="col-md-2">
                                              <center>
                                                  <button type="submit" name="submit" id="submit" class="btn btn-primary waves-effect waves-light" style="margin-top: 25px;" onclick="myFunction()">Submit</button>
                                              </center>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                  </form>
                </div>

            </div>
        </div>
    </div>
   </body>
</html>