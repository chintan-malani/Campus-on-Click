<?php
                                                        require '../common/dbconnect.php';
                                                        $qry="SELECT * FROM subject_detail where isactive=1 and semester_id='".$_POST['data']."'";
                                                        $rs=mysqli_query($conn,$qry);
                                                        while($row=mysqli_fetch_assoc($rs))
                                                        {
                                                        ?>
                                                        <option value="<?php echo $row['subject_id'];?>"><?php echo $row['subject_name'];?></option>
                                                        <?php
                                                        }
                                                        ?>