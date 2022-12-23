  <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 header-left">
                    <p><i class="fa fa-phone"></i> +01 2334 853</p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:email@campusonclick.com">email@campusonclick.com</a></p>
                </div> <!-- /.header-left -->

                <div class="col-md-4">
                    <div class="logo">
                        <a href="index.php" title="Campus On Click" rel="home">
                            <img src="images/logo-campus.png" alt="Universe">
                        </a>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 header-right">
                    <ul class="small-links">
                        <?php
                        if(isset($_SESSION['id']))
                        {
                        ?>
                        <li><a href="result.php">Result</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        <?php       
                        }
                        else
                        {
                        ?>
                        <li><a href="login1.php">Login</a></li>
                        <?php   
                        }
                        ?>
                        
                    </ul>
                </div> <!-- /.header-right -->
            </div>
        </div> <!-- /.container -->

        <div class="nav-bar-main" role="navigation">
            <div class="container">
                <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                        <ul class="main-menu sf-menu">
                            <li class="active"><a href="index.php">Home</a></li><!--1-->
                            <li><a href="#">Subject</a><!--2-->
                                <ul class="sub-menu">
                                    <?php
                                    $qry="SELECT * FROM subject_detail where semester_id='".$_SESSION['sid']."' and course_id='".$_SESSION['cid']."' and isactive=1";
                                    $rs=mysqli_query($conn,$qry);
                                    while($row=mysqli_fetch_assoc($rs))
                                    {
                                    ?>
                                    <li><a href="subject-material.php?id=<?php echo $row['subject_id'];?>"><?php echo $row['subject_name'];?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                             <li><a href="#">Connect With Us</a><!--3-->
                                <ul class="sub-menu">
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="feedback.php">Feedbak</a></li>
                                    <li><a href="complaint.php">Complaints</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Circulars</a><!--4-->
                                <ul class="sub-menu">
                                    <li><a href="news.php">News</a></li>
                                    <li><a href="notice.php">Notice</a></li>
                                    <li><a href="event.php">Event</a></li>
                                </ul>
                            </li>
                            <li><a href="result.php">Result</a></li><!--4-->
                            <li><a href="aboutus.php">About US</a></li><!--5-->
                        </ul> <!-- /.main-menu -->

                </nav> <!-- /.main-navigation -->
            </div> <!-- /.container -->
        </div> <!-- /.nav-bar-main -->

    </header> <!-- /.site-header -->
