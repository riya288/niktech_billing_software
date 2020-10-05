<?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/config.php');
  $category_id=$_POST["category_id"];
  $result = mysqli_query($connect,"SELECT * FROM product where product='$category_id'");
while($row = mysqli_fetch_array($result)) {
?>
   <td style="padding:10px; width: 300px;">
      <input type="text" id="description" name="description[]" class="form-control count" value="<?php echo $row['product'];?>" />                           
  </td>
  <td style="padding:10px;">
      <input type="text" id="qty" name="qty[]" class="form-control count" value="0" />
  </td>
  <td style="padding:10px;">
      <input type="text" name="rate[]" id="rate" class="form-control count"  value="<?php echo $row['rate'];?>" />
  </td>
  <td style="padding:10px;">
      <input type="text" name="amount[]" id="amount" class="form-control"  value="0" readonly/>
  </td>
   
<?php 
}
?>
                                         