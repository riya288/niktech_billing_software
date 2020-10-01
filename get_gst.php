<?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/config.php');
  $category_id=$_POST["category_id"];
  $result = mysqli_query($connect,"SELECT * FROM gst where tax='$category_id'");
while($row = mysqli_fetch_array($result)) {
?>
   <div class="col-md-5">
    <div class="col-md-6"><label class="form-label" for="gst">GST&nbsp;&nbsp;&nbsp;@</label></div>
                                                
    <div class="col-md-6" id="per_gst" style="border-bottom: 1px solid black;">&nbsp;<?php echo $row['total_gst'];?>
    </div>
    <label for="gst" class="static-value">%</label>
  </div>
  <div class="col-md-6">
    <div class="form-group">
        <input type="text" name="gst" id="gst" class=" form-control" value="" readonly>
    </div>
  </div>
   
<?php 
}
?>
                                         