<?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/config.php');
	$result = mysqli_query($connect,"SELECT * FROM product");
?>
<tr id="here">
    <div  class="col-md-12" style="padding-left: 10px;">
       <td style="padding:10px;width: 300px;">
          <select class="select2 form-control" id="fetch" name="description[]" onchange="openPopup()">
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
              <option data-toggle="modal" data-target="#myModal" style="color: blue;">+ Add new</option>
        </select>                              
       </td>
       <td style="padding:10px;">
          <input type="text" id="qty" name="qty[]" class="form-control count" value="" />
       </td>
       <td style="padding:10px;">
          <input type="text" name="rate[]" id="rate" class="form-control count"  value="" />
       </td>
       <td style="padding:10px;">
          <input type="text" name="amount[]" id="amount" class="form-control"  value="" readonly/>
       </td>
    </div>
 </tr>