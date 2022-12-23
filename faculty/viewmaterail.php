<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<!-- Mirrored from extracoding.com/demo/html/adminise/basictables.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Adminise - Clean And Corporate Admin Panel Template</title>
<!--// Stylesheets //-->
<link href="assets/css/A.style.css%2bbootstrap.css%2cMcc.0ONHoLZfWm.css.pagespeed.cf.2IS1LTyY4Z.css" rel="stylesheet" media="screen"/>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<!--// Javascript //-->
<script type="text/javascript" src="assets/js/jquery.js.pagespeed.jm.ZzSiN_5Whq.js"></script>
<script src="assets/js/bootstrap.min.js%2bjquery.accordion.js%2bjquery.custom-scrollbar.min.js%2bicheck.min.js%2bselectnav.min.js%2bfunctions.js.pagespeed.jc.E43GhJAKRQ.js"></script><script>eval(mod_pagespeed_4faLXq7bXy);</script>
<script>eval(mod_pagespeed_5xamDk3U$P);</script>
<script>eval(mod_pagespeed_2mVYeL32K_);</script>
<script>eval(mod_pagespeed_THTTwgJFDR);</script>
<script>eval(mod_pagespeed_HZwFFniCI0);</script>
<script>eval(mod_pagespeed_eqGDkjqIuR);</script>
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- Wrapper Start -->
<div class="wrapper">
	<div class="structure-row">
        <!-- Sidebar Start -->
 <aside class="sidebar">
            <div class="sidebar-in">
                <!-- Sidebar Header Start -->
                <header>
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="dashboard1"><img src="assets/images/Facultylogo.png" alt="Campus on click"/></a>
                    </div>
                    <!-- Logo End -->
                    <!-- Toggle Button Start -->
                    <a href="#" class="togglemenu">&nbsp;</a>
                    <!-- Toggle Button End -->
                    <div class="clearfix"></div>
                </header>
                <!-- Sidebar Header End -->
                <!-- Sidebar Navigation Start -->
                <?php require 'sidebar.php';?>
        </aside>
        <!-- Sidebar End -->
        <!-- Right Section Start -->
         <!-- Sidebar End -->
        <!-- Right Section Start -->
        <div class="right-sec">
            <!-- Right Section Header Start -->
            <header>
                <!-- User Section Start -->
                  <!-- Header Top Navigation Start -->
                  <nav class="topnav">
                    <ul id="nav1">
                       </li>
                        <li class="settings">
                            <a href="#"><i class="glyphicon glyphicon-log-out"></i>Log out</a>
                        </li>
                    </ul>
                </nav>
               <!-- Header Top Navigation End -->
                <div class="clearfix"></div>
            </header>
            <!-- Right Section Header End -->
            <!-- Content Section Start -->
            <div class="content-section">
                <div class="container-liquid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="sec-box">
                                <a class="closethis">Close</a>
                                <header>
                                    <h2 class="heading">View Material</h2>
                                </header>
                                <div class="contents">
                                    <a class="togglethis">Toggle</a>
                                    <section>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Course id</th>
                                                    <th>Semester</th>
                                                    <th>Subject</th>
                                                    <th>Material</th>
                                                    <th>isactive</th>
                                                    <th>Date of insert</th>
                                                    <th>Date of update</th>
                                                    <!-- <th>Edit</th> -->
                                                    <th>delete</th>
                                                    <th>Download</th>
                                                </tr>
                                            </thead>
                                            <?php 
                require '../common/dbconnect.php';
                // $qry = "SELECT * FROM course WHERE isactive !=2";
                $qry = "SELECT * FROM material_share_details where isactive !=2 and faculty_id='".$_SESSION['fid']."'";
                // echo $qry;
                $rs = mysqli_query($conn,$qry);
                if (mysqli_num_rows($rs)>0) 
                {
                    # code...
                    while ($row = mysqli_fetch_assoc($rs)) 
                    {
                        $qryc="SELECT * FROM semester where semester_id='".$row['semester_id']."'";
                        $rsc=mysqli_query($conn,$qryc);
                        $rowc=mysqli_fetch_assoc($rsc);

                        $qrys="SELECT * FROM subject_detail where subject_id='".$row['subject_id']."'";
                        $rss=mysqli_query($conn,$qrys);
                        $rows=mysqli_fetch_assoc($rss);


                        ?>
                        <tr>
                        <td><?php echo $row['course_id']; ?></td>
                        <td><?php echo $rowc['semester']; ?></td>
                        <td><?php echo $rows['subject_name']; ?></td>
                        <td><?php echo $row['material_pdf']?></td>
                        <td><?php echo $row['isactive']; ?></td>
                        <td><?php echo $row['doi']; ?></td>
                        <td><?php echo $row['dou']; ?></td>
                        <!-- <td><a href="editm.php?id=<?php echo $row['material_id'];?>">Edit</a></td> -->
                        <td><a href="deletem.php?id=<?php echo $row['material_id'];?>">Delete</a></td>
                        <td><a href="<?php echo $row['material_pdf']?>" download>Download</a></td>
                        </tr>
                        
                        <?php 
                    }

                }
                else
                {
                    echo "0 Row found";
                }
                         ?>
                                        </table>
                                    </section>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Content Section End -->
        </div>
        <!-- Right Section End -->
    </div>
</div>
<!-- Wrapper End -->

<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');ga('create','UA-42761673-1','extracoding.com');ga('send','pageview');</script>

</body>

<!-- Mirrored from extracoding.com/demo/html/adminise/basictables.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:20 GMT -->
</html>
