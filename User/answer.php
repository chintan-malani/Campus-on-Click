<?php
require '../common/dbconnect.php';
if(!isset($_POST['btn_sb']))
{
    header("location:email.php");
    exit();
}
$qry="SELECT * FROM student where email='".$_POST['email']."' and isactive=1";
$rs=mysqli_query($conn,$qry);
if(mysqli_num_rows($rs))
{

}
else
{
    echo "<script>alert('Invalid Email Address');</script>";;
    echo "<script>window.location='email.php';</script>";;
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

<!-- Mirrored from demo.esmeth.com/universe/Blue/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 08:03:35 GMT -->
<head>
    <title>Campus on click</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Description for my template">
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
    <script src="../../../code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="parsley_css_js/parsley.min.js"></script>
    <link rel="stylesheet" type="text/css" href="parsley_css_js/parsley.css">
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
</head>
<body>

    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars"></i>
        </a>
        <div class="responsive_menu">
            <ul class="main_menu">
                                                    <!--Menu-->

                <li><a href="index.html">Home</a></li><!--1-->
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


    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 header-left">
                    <p><i class="fa fa-phone"></i> +91 4215491715</p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:campusonclick@unversity.com">campusonclick@unversity.com</a></p>
                </div> <!-- /.header-left -->

                <div class="col-md-4">
                    <div class="logo">
                        <a href="index.html" title="Campus On Click" rel="home">
                            <img src="images/logo-campus.png" alt="Universe">
                        </a>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->
            </div>
        </div> <!-- /.container -->

       
    
    
    
    <!-- Being Page Title -->
   <div class="container-fluid page-title ">
        <h2 class="text-info text-center" style="font-weight: bold;">Question</h2>
    
    </div>


    <div class="container" style="padding-bottom: 30px;">
    <div class="row ">
        
        <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>
        
        
        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-6">
            <div class="contact-page-content" style="border-radius: 10px;">
                
                
                <form action="resetpass.php" method="post" id="myform" data-parsley-validate>
                    <div class="form-group">
                    
                    <label for="email"><b>Question:</b></label>
                    <select class="form-control" name="que">
                        <option>--- Security Question ---</option>
                        <?php
                        $qry="SELECT * FROM security_question where isactive=1";
                        $rs=mysqli_query($conn,$qry);
                        while($row=mysqli_fetch_assoc($rs))
                        {
                        ?>
                        <option value="<?php echo $row['sec_que_id'];?>"><?php echo $row['question'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <br>
                    <label for="email"><b>Answer</b></label>
                    <input type="text" name="answer" placeholder="Answer" class="form-control" required=""><br>
                    <input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
                </div>
                
                <div class="form-group">
                    <input type="submit" name="btn_sb" value="Submit"  class="btn btn-primary">
                </div>
                
            </form>
        </div>
        </div><!-- /.col-lg-8 -->
        <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>
        </div> <!-- /.row -->
</div> <!-- /.container -->

    <!-- begin The Footer -->
            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-5">
                        <p class="small-text">&copy; Copyright 2014. Campus On Click designed by <a href="#">Vinay Chaurasiya</a></p>
                    </div> <!-- /.col-md-5 -->
                    
                </div> <!-- /.row -->
            </div> <!-- /.bottom-footer -->

        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->


    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function initialize() {
          var mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(42.888543, 20.879661)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>

</body>

<!-- Mirrored from demo.esmeth.com/universe/Blue/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 08:03:35 GMT -->
</html>