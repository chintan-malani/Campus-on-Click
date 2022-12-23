<?php 
    session_start();
    require '../common/dbconnect.php';
    if (!isset($_SESSION['id'])) {
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
    <style type="text/css">
        .abt_img
        {
            background-image: url('images/gallery/gallery5.jpg');
            height: 300px;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: 30px;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php require 'header.php'?>
     <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.php">Home</a></h6>
                    <h6><span class="page-active">About US</span></h6>
                </div>
            </div>
        </div>
    </div>

     <div class="container page-title" style="background-color:#747577;">

       <h2 class="text-center" style="font-weight: bold;color:white;">About Us</h2>
    
    </div>

    <div class="container" style="padding-bottom: 30px;">
    <div class="row">
        
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
            <div class="abt_img">
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">

            <div class="contact-page-content" style="border-radius: 10px;border:2px solid #004884;">
                <p>Being a web-based project, this proposed Online College Management PHP Project is a dynamic website which is very easy to understand.With easy interface, anyone can easily work in the web portal. The website provides all details of the college including courses, subjects, events, news, attendances, results, notices, and more.By this new website we introduce an add on feature call material sharing.To make the website work effectively, PHP has been used as the Development Platform and MySQL as the Database Management Environment.</p>        
                
        </div>

        </div><!-- /.col-lg-6 -->
        
        </div> <!-- /.row -->
</div> <!-- /.container -->

        
    <!--Begin Footer-->
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

</body>

<!-- Mirrored from demo.esmeth.com/universe/Blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 08:02:51 GMT -->
</html>    