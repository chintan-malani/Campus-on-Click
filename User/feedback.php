<?php
session_start();
require '../common/dbconnect.php';
if(!isset($_SESSION['id']))
{
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from demo.esmeth.com/universe/Blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 08:01:52 GMT -->
<head>
    <title>Campus On Click</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="College Education Responsive Template">
    <meta name="author" content="Esmet">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
        
    <!-- CSS Bootstrap & Custom -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet" media="screen">
    
    <link href="style.css" rel="stylesheet" media="screen">
        
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    <!-- JavaScripts -->
    <script src="../../../code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../../code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
    <!-- <style type="text/css">
        .sub-menu{display: none;}
        .main-menu > li:hover .sub-menu{display: block;}

    </style> -->
    <link rel="stylesheet" type="text/css" href="css/extra.css">
</head>
<body>

    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        
        <div class="responsive_menu">
            <ul class="main_menu">
                                                    <!--Menu-->

                <li><a href="index.html">Home</a></li><!--1-->
                <li><a href="#">Courses</a><!--2-->
                    <ul>
                        <li><a href="subject-material.html">Subject Material</a></li>
                    </ul>
                </li>
                <li><a href="result.html">Result</a></li><!--3-->
                <li><a href="#">Contact</a><!--4-->
                    <ul>
                        <li><a href="feedback.html">Feedback</a></li>
                        <li><a href="complaint.html">Complaints</a></li>
                    </ul>
                </li>
                <li><a href="aboutus.html">About US</a></li><!--5-->


            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->


    <?php require 'header.php';?> <!-- /.site-header -->

     <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><span class="page-active">Feedback</span></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container page-title" style="background-color:#747577;">

       <h2 class="text-center" style="font-weight: bold;color:white;">Give Feedback</h2>
    
    </div>

    <div class="container" style="padding-bottom: 30px;">
    <div class="row ">
        
        <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>
        
        
        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-6">

            <div class="contact-page-content" style="border-radius: 10px;border:2px solid #004884;">
                
                
                <form action="feedbackpro.php" method="post" id="myform" data-parsley-validate>
                    <div class="form-group">
                        <label for="Department"><b>Select Faculty</b></label>
                        <select name="faculty_id" class="form-control" required="">
                            <option value="">Select Faculty</option>
                            <?php
                            $qrys="SELECT * FROM faculty where course_id='".$_SESSION['cid']."'";
                            $rss=mysqli_query($conn,$qrys);
                            while($rows=mysqli_fetch_assoc($rss))
                            {
                            ?>
                            <option value="<?php echo $rows['faculty_id'];?>"><?php echo $rows['firstname']." ".$rows['lastname'];?></option>
                            <?php
                            }
                            ?>
                    </select><br>
                    
                    <label for=""><b>Feedback</b></label>
                    <textarea name="feedback" rows="5" class="form-control" placeholder="Feedback"></textarea>
                    <br>
                </div>
                
                <div class="form-group">
                    <input type="submit" name="submit" value="Submit"  class="btn btn-primary">
                    
                </div>
                
            </form>
        </div>
        </div><!-- /.col-lg-8 -->
        <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>
        </div> <!-- /.row -->
</div> <!-- /.container -->

         
     <!-- begin The Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                
                
                <div class="col-md-6">
                    <div class="footer-widget">
                        <ul class="footer-media-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-youtube"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div> <!-- /.row -->

            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-6">
                        <p class="small-text">&copy; Copyright 2014. Campus On Click designed by <a href="#">Vinay Chaurasiya</a></p>
                    </div> <!-- /.col-md-6 -->
                    
                </div> <!-- /.row -->
            </div> <!-- /.bottom-footer -->

        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

</body>

<!-- Mirrored from demo.esmeth.com/universe/Blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 08:02:51 GMT -->
</html>    