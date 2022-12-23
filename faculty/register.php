<?php
    session_start();
    if (isset($_SESSION['admin'])) 
    {
        header("location:dashboard.php");
        exit();
    }
    if (isset($_COOKIE['admin']))
    {
        $un = $_COOKIE['user'];
        $ps = $_COOKIE['pass'];
    }
    else
    {
        $un = "";
        $ps = "";
    }
 ?>

<!DOCTYPE HTML>
<html>

<!-- Mirrored from extracoding.com/demo/html/adminise/login1.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title></title>
<!--// Stylesheets //-->
<link href="assets/css/A.style.css%2bbootstrap.css%2cMcc.0ONHoLZfWm.css.pagespeed.cf.2IS1LTyY4Z.css" rel="stylesheet" media="screen"/>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<script type="text/javascript" src="assets/js/jquery.js.pagespeed.jm.ZzSiN_5Whq.js"></script>
<script src="assets/js/bootstrap.min.js%2bicheck.min.js.pagespeed.jc.iWFNLGOGoP.js"></script><script>eval(mod_pagespeed_4faLXq7bXy);</script>
<script>eval(mod_pagespeed_THTTwgJFDR);</script>
<script type="text/javascript" src="parsley_css_js/parsley.min.js"></script>
<link rel="stylesheet" type="text/css" href="parsley_css_js/parsley.css">
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

<![endif]-->
<style type="text/css">
  label
  {
    color: white !important;
    font-weight: bold !important;
  }
</style>
</head>

<body>
<!-- Wrapper Start -->
<div class="loginwrapper" style="height:1200px;top:-280px;">
  

    <div class="loginone" style="box-shadow: 1px 1px 5px grey;width:700px;margin-left:-355px;padding:10px;height:auto;">
        <center><h2 style="color: white;">Register</h2></center>
        <br>
        <form data-parsley-validate action="registerpro.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter your firstname"  name="fn" value="" class="form-control" required="" data-parsley-minlength="5"/>
                
            </div>
            <div class="form-group">
              <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter your lastname"  name="ln" value="" class="form-control" required="" data-parsley-minlength="5"/>
                
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter your Email"  name="email" value="" class="form-control" required="" data-parsley-minlength="5"/>
                
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Enter your contact no"  name="contact" value="" class="form-control" required="" data-parsley-minlength="5"/>
                
            </div>
            <div class="form-group">
                <select class="form-control" name="department" id="department">
                    <option>--- Choose Department ---</option>
               <?php 
               require '../common/dbconnect.php';
               $qry="SELECT * FROM department where isactive=1";
               $rs=mysqli_query($conn,$qry);
               while($row=mysqli_fetch_assoc($rs))
               {
               ?>
               <option value="<?php echo $row['department_id'];?>"><?php echo $row['name'];?></option>
               <?php
                }
               ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <select class="form-control" name="course" id="course">
                    <option>--- Choose Course ---</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <input type="file" class="form-control" placeholder="Enter your Email"  name="image" value="" class="form-control" required="" accept="image/*" />
                
            </div>
            <div class="form-group">
                <select class="form-control" name="question" id="question">
                    <option>--- Choose Question ---</option>
               <?php 
               require '../common/dbconnect.php';
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
            </div>
            <Br>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your answer"  name="answer" value="" class="form-control" required="" data-parsley-minlength="3"/>
                <i class="glyphicon glyphicon-user"></i>
            </div>

            <div class="form-group">
                <input type="password" name="pass" value="" placeholder="Enter your password" class="fotxt_unrm-control" required="" data-parsley-minlength="5" data-parsley-maxlength="9" data-parsley-minlength-message="Pls enter char between 5 to 12 to make it complex..!"/>
                
            </div>
            <div class="form-group">
                <input type="password" name="cpass" value="" placeholder="Enter your password" class="fotxt_unrm-control" required="" data-parsley-minlength="5" data-parsley-maxlength="9" data-parsley-minlength-message="Pls enter char between 5 to 12 to make it complex..!"/>
                
            </div>
            <script>$(document).ready(function(){$('.bluecheckradios').iCheck({checkboxClass:'icheckbox_flat-blue',radioClass:'iradio_flat-blue',increaseArea:'20%'});});</script>
            <input type="submit" class="btn btn-primary style2" value="Register" 
            name="btn_sb"/>
        </form>
    </div>
</div>
<!-- Wrapper End -->

<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');ga('create','UA-42761673-1','extracoding.com');ga('send','pageview');</script>

</body>
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
<!-- Mirrored from extracoding.com/demo/html/adminise/login1.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:24 GMT -->
</html>
