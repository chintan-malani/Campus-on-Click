<?php
session_start();
require '../common/dbconnect.php';
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
    <?php require 'header.php';?> <!-- /.site-header -->

        <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><span class="page-active">Download Subject Material</span></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Here begin Main Content -->
            <div class="row">

                <?php
                $qry="SELECT * FROM material_share_details where subject_id='".$_GET['id']."'";
                $rs=mysqli_query($conn,$qry);
                while($row=mysqli_fetch_assoc($rs))
                {
                    $qrys="SELECT * FROM subject_detail where subject_id='".$row['subject_id']."'";
                    $rss=mysqli_query($conn,$qrys);
                    $rows=mysqli_fetch_assoc($rss);

                    $qryc="SELECT * FROM semester where semester_id='".$row['semester_id']."'";
                    $rsc=mysqli_query($conn,$qryc);
                    $rowc=mysqli_fetch_assoc($rsc);

                    $qrysc="SELECT * FROM course where course_id='".$row['course_id']."'";
                    $rssc=mysqli_query($conn,$qrysc);
                    $rowsc=mysqli_fetch_assoc($rssc);

                    $qryd="SELECT * FROM department where department_id='".$row['department_id']."'";
                    $rsd=mysqli_query($conn,$qryd);
                    $rowd=mysqli_fetch_assoc($rsd);

                    $qryf="SELECT * FROM faculty where faculty_id='".$row['faculty_id']."'";
                    $rsf=mysqli_query($conn,$qryf);
                    $rowf=mysqli_fetch_assoc($rsf);

                ?>
                <div class="col-md-6">
                    <div class="list-event-item">
                        <div class="box-content-inner clearfix">
                            <div class="list-event-thumb">
                               <i class="fa fa-file-pdf-o" style="font-size: xxx-large;"></i>
                               <br><br>
                               <p class="font-weight-bold" style="float: left;">Dept Name</p><p style="float: left;"> :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $rowd['name'];?></p> 
                               <div style="clear: both;"></div>
                                <p class="font-weight-bold" style="float: left;">Course Name</p><p style="float: left;"> :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $rowsc['course_name'];?></p> 
                               <div style="clear: both;"></div>

                                <p class="font-weight-bold" style="float: left;">Semester</p><p style="float: left;"> :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $rowc['semester'];?></p> 
                                 <div style="clear: both"></div>
                                 <a href="../faculty/<?php echo $row['material_pdf'];?>" download><button type="submit" class="btn btn-success ">Download</button></a>
                            </div>
                            <div class="list-event-header">
                                 <h3 class="font-weight-bold"><?php echo $rows['subject_name'];?></h3>
                                <span class="event-date small-text"><i class="fa fa-calendar-o"></i><?php echo $row['doi'];?><!-- date of upload --></span>
                                
                               
                            </div>
                            <h5 class="event-title"><a href="event-single.html"><?php echo $row['title'];?></a></h5>
                            <p><br><br><br> <b class="text-danger">Description :</b><?php echo $row['description'];?></p>
                            <div class="" style="width: 100%;float: left;padding-top: 15px;">
                                <p class="font-weight-bold text-danger text-center"><i class="fa fa-user"></i> Uploaded By : (<?php echo $rowf['firstname']. " ".$rowf['lastname'] ;?>)</p>
                            </div>
                            
                        </div> <!-- /.box-content-inner -->
                    </div> <!-- /.list-event-item -->
                    
                   
                </div>
                <?php
                }
                ?>
                 <!-- /.col-md-6 -->

                 <!-- /.col-md-6 -->

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