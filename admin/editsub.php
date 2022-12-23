<?php
session_start();
require '../common/dbconnect.php';
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}

?>
<!DOCTYPE HTML>
<html>

<!-- Mirrored from extracoding.com/demo/html/adminise/dashboard2.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Campus on click</title>
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
            <?php require 'sidebar.php';?>
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
                            <a href="logout.php"><i class="glyphicon glyphicon-log-out"></i>Log out</a>
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
                            <h2 class="heading">Add Subjects</h2>
                        </header>
                        <div class="table-box">
                            <form action="updatesubjectpro.php" method="post">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="col-md-4">Select Department :</td>
                                            <td class="col-md-8">
                                                <select name="department" id="department" class="form-control">
                                                    <option>--- Select Department ---</option>
                                                    <?php
                                                    $qrye="SELECT * FROM subject_detail where subject_id='".$_GET['id']."'";
                                                    $rse=mysqli_query($conn,$qrye);
                                                    $rowe=mysqli_fetch_assoc($rse);

                                                    $qry="SELECT * FROM department where isactive=1";
                                                    $rs=mysqli_query($conn,$qry);
                                                    while($row=mysqli_fetch_assoc($rs))
                                                    {
                                                        ?>
                                                        <option value="<?php echo $row['department_id'];?>" <?php if($rowe['department_id'] == $row['department_id']){ echo 'selected';}?>><?php echo $row['name'];?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4">Select Course :</td>
                                            <td class="col-md-8">
                                                <select name="course" id="course" class="form-control">
                                                    <option>--- Select Couser ---</option>
                                                    <?php
                                                    $qry="SELECT * FROM course where isactive=1";
                                                    $rs=mysqli_query($conn,$qry);
                                                    while($row=mysqli_fetch_assoc($rs))
                                                    {
                                                     ?>
                                                     <option value="<?php echo $row['course_id'];?>" <?php if($rowe['course_id'] == $row['course_id']){ echo 'selected';}?>><?php echo $row['course_name'];?></option>
                                                    <?php    
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4">Select Semester :</td>
                                            <td class="col-md-8">
                                                <select name="semester" id="semester" class="form-control">
                                                    <option>--- Select semster ---</option>
                                                     <?php
                                                    $qry="SELECT * FROM semester where isactive=1";
                                                    $rs=mysqli_query($conn,$qry);
                                                    while($row=mysqli_fetch_assoc($rs))
                                                    {
                                                     ?>
                                                     <option value="<?php echo $row['semester_id'];?>" <?php if($rowe['semester_id'] == $row['semester_id']){ echo 'selected';}?>><?php echo $row['semester'];?></option>
                                                    <?php    
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4">Add subject name:</td>
                                            <td class="col-md-8"><input type="text" placeholder="subject name" class="form-control" name="subject" value="<?php echo $rowe['subject_name'];?>">
                                                <input type="hidden" name="sub_id" value="<?php echo $_GET['id'];?>"></td>
                                        </tr>
                                        <td class="col-md-4">
                                            <button class="btn btn-success" type="submit" name="sb"> Submit</button></td>
                                            <td class="col-md-8">

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
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
<!-- Mirrored from extracoding.com/demo/html/adminise/dashboard2.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:16 GMT -->
</html>
