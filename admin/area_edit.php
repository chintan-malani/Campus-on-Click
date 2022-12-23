<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
} 
require '../common/dbconnect.php';
$id=$_GET['id'];
$select="SELECT * FROM area WHERE area_id='".$id."'";
$query=mysqli_query($conn,$select);
if ($query) {
	//echo "selected";
	$row=mysqli_fetch_assoc($query);
}

 ?>
 <!DOCTYPE HTML>
<html>

<!-- Mirrored from extracoding.com/demo/html/adminise/dashboard2.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>state_edit</title>
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
                        <a href="dashboard1.php"><img src="assets/images/xlogo.png.pagespeed.ic.Foz7Hxw-1_.png" alt="Campus on click"/></a>
                    </div>
                    <!-- Logo End -->
                    <!-- Toggle Button Start -->
                    <a href="#" class="togglemenu">&nbsp;</a>
                    <!-- Toggle Button End -->
                    <div class="clearfix"></div>
                </header>
                <!-- Sidebar Header End -->
                <!-- Sidebar Navigation Start -->
                <nav class="navigation">
                     <ul class="navi-acc" id="nav2">
                        <li>
                        <a href="dashboard2.php" class="dashboard">Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="#forms" class="forms">Manage Profile</a>
                            <ul>
                                
                                <li><a href="basictables.php">View profile</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#pages" class="pages">Manage Course</a>
                            <ul>
                                <li><a href="addcourse.php">Add course</a></li>
                                <li><a href="viewcourse.php">View course</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#pages" class="pages">Manage Students</a>
                            <ul>
                                <li><a href="viewstudenttable.php">View students</a></li>
                            </ul>
                        </li>

                         <li>
                            <a href="#pages" class="pages">Manage Semester</a>
                            <ul>
                                <li><a href="addsemester.php">Add semester details</a></li>
                                <li><a href="viewsemester.php">View semester</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#pages" class="pages">Manage Department</a>
                            <ul>
                                <li><a href="adddepartment.php">Add department details</a></li>
                                <li><a href="viewdepartment.php">View department</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#pages" class="pages">Manage Subjects</a>
                            <ul>
                                <li><a href="addsubject.php">Add subject details</a></li>
                                <li><a href="viewsubject.php">View subject</a></li>
                            </ul>
                        </li>

                         <li>
                            <a href="#pages" class="pages">Manage Exam Result</a>
                            <ul>
                                <li><a href="addexamresult.php">Add exam result</a></li>
                                <li><a href="viewexamresult.php">View exam result</a></li>
                            </ul>
                        </li>

                         

                         <li>
                            <a href="#pages" class="pages">Manage Event</a>
                            <ul>
                                <li><a href="addevent.php">Add Event</a></li>
                                <li><a href="viewevent.php">View Event</a></li>
                            </ul>
                        </li>

                         <li>
                            <a href="#pages" class="pages">Manage Notice</a>
                            <ul>
                                <li><a href="addnotice.php">Add Notice</a></li>
                                <li><a href="viewnotice.php">View Notice</a></li>
                            </ul>
                        </li>

                         <li>
                            <a href="#pages" class="pages">Manage News</a>
                            <ul>
                                <li><a href="addnews.php">Add News</a></li>
                                <li><a href="viewnews.php">View News</a></li>
                            </ul>
                        </li>

                         <li>
                            <a href="#pages" class="pages">Manage Faculty</a>
                            <ul>
                                <li><a href="viewfaculty.php">View Faculty</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#pages" class="pages">Manage Security Questions</a>
                            <ul>
                                <li><a href="addsecutrityquestion.php">Add Security Questions</a></li>
                                <li><a href="viewsecurityquestion.php">View Security Questions</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#pages" class="pages">Manage Contact</a>
                            <ul>
                                <li><a href="viewcontact.php">View Contact</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#pages" class="pages">Manage Feedback</a>
                            <ul>
                                <li><a href="viewfeedback.php">View Feedback</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#pages" class="pages">Manage Complaint</a>
                            <ul>
                                <li><a href="viewcomplaint.php">View Complaint</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#pages" class="pages">Manage State</a>
                            <ul>
                                <li><a href="addstate.php">Add State</a></li> 
                                <li><a href="viewstate.php">View State</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#pages" class="pages">Manage City</a>
                            <ul>
                                <li><a href="addcity.php">Add City</a></li>
                                <li><a href="viewcity.php">View City</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#pages" class="pages">Manage Area</a>
                            <ul>
                                <li><a href="addarea.php">Add Area</a></li>
                                <li><a href="viewarea.php">View Area</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- Sidebar Navigation End -->
                <!-- Shadow Start -->
                <span class="shadows"></span>
                <!-- Shadow End -->
            </div>
        </aside>
        <!-- Sidebar End -->
        <!-- Right Section Start -->
        <div class="right-sec">
            <!-- Right Section Header Start -->
            <header>
                <!-- User Section Start -->
             
                <!-- User Section End -->
                <!-- Search Section Start -->
                <!-- Search Section End -->
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
                        <header>
                                    <h2 class="heading">Edit area</h2>
                                </header>
                        <div class="table-box">
                                        <table class="table" >
                                            <form action="area_editPro.php" method="POST">
                                            	<input type="hidden" name="sid" value="<?php echo$row['area_id']; ?>"> 
                                            <tbody>
                                                <tr>
                                                    <td class="col-md-4">Add area name:</td>
                                                    <td class="col-md-8"><input type="text"  name="sname" value="<?php echo$row['area_name']; ?>" class="form-control"></td>
                                                </tr>
                                                    <td class="col-md-4">
                                                        <button class="btn btn-success" name="btn_sb"> change</button></td>
                                                    <td class="col-md-8">
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                            </form>
                                        </table>
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

<!-- Mirrored from extracoding.com/demo/html/adminise/dashboard2.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:16 GMT -->
</html>
