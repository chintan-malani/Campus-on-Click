 <?php 
               require '../common/dbconnect.php';
               $qry="SELECT * FROM semester where isactive=1 and course_id='".$_POST['data']."'";
               $rs=mysqli_query($conn,$qry);
               while($row=mysqli_fetch_assoc($rs))
               {
               ?>
               <option value="<?php echo $row['semester_id'];?>"><?php echo $row['semester'];?></option>
               <?php
                }
               ?>