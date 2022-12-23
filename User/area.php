   <?php
   require '../common/dbconnect.php';
     $qry = "select area_id,area_name from area WHERE isactive=1 and city_id='".$_POST['data']."'" ;
          $rs=mysqli_query($conn,$qry);

    while($row=mysqli_fetch_assoc($rs)) { ?>
              <option value="<?php echo $row['area_id'];?>"><?php echo $row['area_name'];?></option>
          <?php } ?>