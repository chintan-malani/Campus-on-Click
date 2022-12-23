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
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/modernizr.js"></script>


    <style type="text/css" media="screen">
        .myslider1
        {
            margin-top: 30px;
            height: 470px;
           box-shadow: 1px 1px 5px grey;
           padding: 10px;
        }    
    </style>

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
    <style>
  /* Make the image fully responsive */
  
  </style>
</head>
<body>

    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        
        <div class="responsive_menu">
            <ul class="main_menu">
                                                    <!--Menu-->

                <li><a href="index.php">Home</a></li><!--1-->
                <li><a href="#">Courses</a><!--2-->
                    <ul>
                        <li><a href="subject-material.html">Subject Materials</a></li>
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


  <?php require 'header.php';?>
    
    
    
    <div class="container myslider1">
        
        <div class="carousel slide" id="myslider" data-ride="carousel">
        
            <div class="carousel-inner">
            
                <div class="carousel-item active">
                    <img src="images/gallery/1.png" alt="img1"  height="450px"  width="100%">
                    <div class="carousel-caption"><!--add caption using this class on image-->
                    
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/gallery/2.jpg" alt="img2"  height="450px" width="100%">
                    <div class="carousel-caption">
                    
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/gallery/3.png" alt="img3" height="450px" width="100%">
                    <div class="carousel-caption">
                   
                    </div>
                </div>
                
            </div>
            
            <!--carousel indicators--->
            <ul class="carousel-indicators">
                <li class="active" data-target="#myslider" data-slide-to="0"></li>
                <li data-target="#myslider" data-slide-to="1"></li>
                <li data-target="#myslider" data-slide-to="2"></li>            
            </ul>
            <!------------------------->
            
            <!---left-right controls---->
            <a href="#myslider" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon"></span>
            
            </a>
            <a href="#myslider" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
            
            </a>
            <!------------------------->
        
        
        
        </div> 
         
    </div>
    

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="widget-item">
                            <h2 class="welcome-text">Welcome to the Campus On Click</h2>
                            <p>Being a web-based project, this proposed Online College Management PHP Project is a dynamic website which is very easy to understand.With easy interface, anyone can easily work in the web portal. The website provides all details of the college including courses, subjects, events, news, attendances, results, notices, and more.By this new website we introduce an add on feature call material sharing.To make the website work effectively, PHP has been used as the Development Platform and MySQL as the Database Management Environment.</p>
                        </div> <!-- /.widget-item -->

                         <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Our Gallery</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery1.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery2.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery3.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery4.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb4.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery5.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery6.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery7.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb7.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery8.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb8.jpg" alt="" />
                                </a>
                            </div>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div>
            <div class="col-md-4">
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Top Professors</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="images/prof/a1.jpg" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Bhavesh Patel</h5>
                                <p class="small-text">C Programming</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="images/prof/a1.jpg" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Jignesh Patel</h5>
                                <p class="small-text">Digital Electronics</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="images/prof/a2.jpg" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Dhara Darji</h5>
                                <p class="small-text">Web Development</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

               
            </div>
         </div><!--row complete----->   


         <div class="row">
            <div class="col-md-8">
                
            </div>
            <div class="col-md-4"></div>
         </div>


</div><!---container--->



           

                
                               
                     
           
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


    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>

</body>

<!-- Mirrored from demo.esmeth.com/universe/Blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 08:02:51 GMT -->
</html>