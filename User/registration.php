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
        
        <div class="responsive_menu">
          <ul class="main_menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Events</a>
              <ul>
                <li><a href="events-grid.html">Events Grid</a></li>
                <li><a href="events-list.html">Events List</a></li>
                <li><a href="event-single.html">Event Details</a></li>
              </ul>
            </li>
            <li><a href="#">Courses</a>
              <ul>
               <li><a href="courses.html">Course List</a></li>
               <li><a href="course-single.html">Course Single</a></li>
             </ul>
           </li>
           <li><a href="#">Blog Entries</a>
            <ul>
              <li><a href="blog.html">Blog Grid</a></li>
              <li><a href="blog-single.html">Blog Single</a></li>
              <li><a href="blog-disqus.html">Blog Disqus</a></li>
            </ul>
          </li>
          <li><a href="#">Pages</a>
            <ul>
              <li><a href="archives.html">Archives</a></li>
              <li><a href="shortcodes.html">Shortcodes</a></li>
              <li><a href="gallery.html">Our Gallery</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul> <!-- /.main_menu -->
        <ul class="social_icons">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul> <!-- /.social_icons -->
      </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->


    <header class="site-header">
      <div class="container">
        <div class="row">
          <div class="col-md-4 header-left">
            <p><i class="fa fa-phone"></i> +01 2334 853</p>
            <p><i class="fa fa-envelope"></i> <a href="mailto:email@universe.com">email@universe.com</a></p>
          </div> <!-- /.header-left -->

          <div class="col-md-4">
            <div class="logo">
              <a href="index.php" title="campusonclick" rel="home">
                <img src="images/logo-campus.png" alt="Universe">
              </a>
            </div> <!-- /.logo -->
          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 header-right">
            <ul class="small-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div> <!-- /.header-right -->
        </div>
      </div> <!-- /.container -->





      <!-- Being Page Title -->
      <div class="container-fluid page-title ">
        <h2 class="text-info text-center" style="font-weight: bold;">Registration</h2>

      </div>


      <div class="container" style="padding-bottom: 30px;">
        <div class="row ">

          <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2"></div>


          <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
            <div class="contact-page-content" style="border-radius: 10px;">
              <form action="studentregprocess.php" method="post" id="myform" data-parsley-validate>        
                <label for="first name">First Name:</label>
                <input name="fname" placeholder="firstname" class="form-control" required="" data-parsley-minlength="3" data-parsley-error-message="FirstName should be more than 2 Characters" size="50"><br>


                <label for="last name"><b>Last Name:</label>
                 <input type="text" class="form-control"  name="lname" placeholder="lastname" required=""><br>

                 <label for="email"><b>Email:</b></label>
                 <input type="email" name="email" placeholder="Email" class="form-control" required=""><br>

                 <label for="enrollment number"><b>Enrollment Number:</label>
                  <input type="text" name="enroll" value="" class="form-control" required="" data-parsley-type="integer" data-parsley-maxlength="10" data-parsley-maxlength-message="Ohh...!! its enrollment number...!!" placeholder="enrollment no"><br>    

                  <label for="contact"><b>Contact:</b></label>
                  <input type="text" name="contact" value="" class="form-control" required="" data-parsley-type="integer" data-parsley-maxlength="10" data-parsley-maxlength-message="Ohh...!! Its a phone number...!!" placeholder="Contact"><br>



                  <label for="Department"><b>Department:</b></label>
                  <?php
                  require '../common/dbconnect.php';
    // FOREIGN KEY
                  $qry = "select department_id,name from department WHERE isactive=1";
                  $rs=mysqli_query($conn,$qry);

                  ?>
                  <select name="department" class="form-control" required="" id="department">
                    <option>--- Choose DEPARTMENT ---</option>
                    <?php
                    while($row=mysqli_fetch_assoc($rs)) { ?>
                      <option value="<?php echo $row['department_id'];?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                  </select><br>
                  <label for="Semester"><b>Course:</b></label>

                  <select name="course" class="form-control" required="" id="course">
                    <option>--- SELECT Course---</option>

                  </select><br>
                  <label for="Semester"><b>Semester:</b></label>

                  <select name="semester" class="form-control" required="" id="semester">
                    <option>--- SELECT SEMESTER---</option>

                  </select><br>
                  <label for=""><b>State:</b></label>
                  <?php
                  $qry = "select state_id,state_name from state WHERE isactive=1";
                  $rs=mysqli_query($conn,$qry);
                  
                  ?>

                  <select name="state" class="form-control" required="" id="state">
                    <?php
                    while($row=mysqli_fetch_assoc($rs))
                    { 
                      ?>
                      <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name'];?></option>
                      <?php
                    } 
                    ?>
                  </select><br>

                  <label for=""><b>City:</b></label>


                  <select name="city" class="form-control" required="" id="city">
                    <option>--- SELECT CITY ---</option>
                  </select><br>

                  <label for=""><b>Area:</b></label>

                  <select name="area" class="form-control" required="" id="area">
                    <option>--- SELECT AREA ---</option>
                  </select><br>


                  <label for="security-question"><b>Select Security Question:</b></label>
                  <?php
                  $qry = "select sec_que_id,question from security_question WHERE isactive=1";
                  $rs=mysqli_query($conn,$qry);
                  ?>

                  <select name="securityquestion" class="form-control" required="">
                    <?php
                    while($row=mysqli_fetch_assoc($rs)) { ?>
                      <option value="<?php echo $row['sec_que_id']; ?>"><?php echo $row['question'];?></option>
                    <?php } ?>
                  </select><br>

                  <label for="last name"><b>Answer:</label>
                   <input type="text" class="form-control"  name="answer" placeholder="Answer" required=""><br>


                   <label for="password"><b>Password:</b></label>
                   <input class="form-control" type="password" name="pwd" placeholder="Password" required='' ><br>


                   <label for="passwo rd-repeat"><b>Confirm Password:</label>
                    <input class="form-control" type="password" name="cpwd" placeholder="Confirm password" required=''><br>

                    <hr>
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                    <button type="submit" name="submit" value="SUBMIT" class="btn btn-info">Register</button>

                  </div>

                  <div class="container signin">
                    <p>Already have an account? <a href="login.html">Sign in</a>.</p>
                  </div>            
                </div>
              </form>
            </div>
          </div><!-- /.col-lg-8 -->
          <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2"></div>
        </div> <!-- /.row -->
      </div> <!-- /.container -->


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
      <script type="text/javascript">
        $(document).ready(function(){
      // alert();
      $("#department").change(function(e){
        var sub=$(this).val();
        // alert(sub);
        e.preventDefault();
        $.ajax({
          type: "POST",
          url: "course.php",
          datatype: "html",
          data:{data:sub},            
          success: function(result){
            // alert(result);
            $("#course").html(result);
          }
        });
      })
    });

  </script>
    <script type="text/javascript">
        $(document).ready(function(){
      // alert();
      $("#course").change(function(e){
        var sub=$(this).val();
        // alert(sub);
        e.preventDefault();
        $.ajax({
          type: "POST",
          url: "semester.php",
          datatype: "html",
          data:{data:sub},            
          success: function(result){
            // alert(result);
            $("#semester").html(result);
          }
        });
      })
    });

  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      // alert();
      $("#state").change(function(e){
        var sub=$(this).val();
        // alert(sub);
        e.preventDefault();
        $.ajax({
          type: "POST",
          url: "city.php",
          datatype: "html",
          data:{data:sub},            
          success: function(result){
            // alert(result);
            $("#city").html(result);
          }
        });
      })
    });

  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      // alert();
      $("#city").change(function(e){
        var sub=$(this).val();
        // alert(sub);
        e.preventDefault();
        $.ajax({
          type: "POST",
          url: "area.php",
          datatype: "html",
          data:{data:sub},            
          success: function(result){
            // alert(result);
            $("#area").html(result);
          }
        });
      })
    });

  </script>
</body>

<!-- Mirrored from demo.esmeth.com/universe/Blue/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 08:03:35 GMT -->
</html>