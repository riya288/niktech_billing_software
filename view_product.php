
                    <div class="row">
                            <div class="col-md-12">
                                <div class=" table-responsive card-box">
                                    
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Product Name</th>
                                            <th>Product Rate</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $query = "SELECT * FROM product ORDER BY id DESC";  
                                        $result = mysqli_query($connect,$query);
                                        if(mysqli_num_rows($result)>0)
                                        {                                                                 
                                          $i = 1;
                                          while($row = mysqli_fetch_assoc($result))
                                          { 
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                <?php
                                                if(isset($row['product']) && !empty($row['product']))
                                                {
                                                    echo $row['product']; 
                                                }
                                                ?>
                                            </td>
                                             <td>
                                                <?php
                                                if(isset($row['rate']) && !empty($row['rate']))
                                                {
                                                    echo $row['rate']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['dt_created']) && !empty($row['dt_created']))
                                                {
                                                    echo $row['dt_created'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="product.php?hId=<?php if (isset($row['id']) &&
                                                        !empty($row['id'])) {echo $row['id'];} ?>" title="Edit">
                                                        <i class="fa fa-edit" style="font-size: 20px;"></i>
                                                        </a>
                                                 <a href="product.php?dId=<?php if(isset($row['id']) && !empty($row['id'])){ echo $row['id']; }?>" onClick="return confirm('Are you sure you want to delete this record');" title="Delete">
                                                            <i class="fa fa-trash" style="font-size: 20px;"></i>
                                                        </a>
                                            </td>
                                        </tr>
                                        <?php
                                            $i++;
                                            } 
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>