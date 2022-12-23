   <?php
   require '../common/dbconnect.php';
$qry = "select city_id,city_name from city WHERE isactive=1 and state_id='".$_POST['data']."'";
              $rs=mysqli_query($conn,$qry);
 
              while($row=mysqli_fetch_assoc($rs)){ ?>
                  <option value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name'];?></option>
              <?php } ?>