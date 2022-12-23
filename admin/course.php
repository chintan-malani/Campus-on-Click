<option>--- Select Course ---</option>
 <?php 
               require '../common/dbconnect.php';
               $qry="SELECT * FROM course where isactive=1 and department_id='".$_POST['data']."'";
               $rs=mysqli_query($conn,$qry);
               while($row=mysqli_fetch_assoc($rs))
               {
               ?>
               <option value="<?php echo $row['course_id'];?>"><?php echo $row['course_name'];?></option>
               <?php
                }
               ?>