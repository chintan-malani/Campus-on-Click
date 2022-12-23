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
    <?php require 'header.php';?>
    
    
    <center><h1>Result</h1></center>
    <div class="container">
        <div class="row">
            <?php
            $qry="SELECT * FROM result where student_id='".$_SESSION['id']."'";
            $rs=mysqli_query($conn,$qry);
            while($row=mysqli_fetch_assoc($rs))
            {
            ?>
              <div class="col-md-3">
                <img src="../faculty/<?php echo $row['marsheet_pic'];?>" height="300" width="100%">
                <center><h5>Semester</h5></center>
               <center> <p><a href="../faculty/<?php echo $row['marsheet_pic'];?>" download>Download</a></p></center>
              </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- begin The Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                
                
                <div class="col-md-3">
                    <div class="footer-widget">
                        <ul class="footer-media-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-youtube"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-apple"></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- /.row -->

            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-5">
                        <p class="small-text">&copy; Copyright 2014. Campus On Click designed by <a href="#">Vinay Chaurasiya</a></p>
                    </div> <!-- /.col-md-5 -->
                    
                </div> <!-- /.row -->
            </div> <!-- /.bottom-footer -->

        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->


    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>

</body>

<!-- Mirrored from demo.esmeth.com/universe/Blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 08:02:51 GMT -->
</html>