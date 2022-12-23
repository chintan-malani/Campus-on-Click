<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:57:22 GMT -->
<head>
    <title>Lava Material - Web Application and Website Multipurpose Admin Panel Template</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />

    <script type="text/javascript" src="parsley_css_js/parsley.min.js"></script>
<link rel="stylesheet" type="text/css" href="parsley_css_js/parsley.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="blog-login">
        <div class="blog-login-in">
            <?php
    session_start();
    if (isset($_SESSION['admin'])) 
    {
        header("location:dashboard.php");
        exit();
    }
    if (isset($_COOKIE['user']))
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
          <b>  <form  method="post" data-parsley-validate id="myform">
        Username : <input type="text" name="txt_un" name="" value="" class="form-control" required="" data-parsley-minlength="5"  value="<?php echo $un; ?>"><br>
        Password : <input type="Password" name="txt_ps" class="form-control" required="" data-parsley-minlength="5" data-parsley-maxlength="12" data-parsley-minlength-message="Pls enter char between 5 to 12 to make it complex..!" value="<?php echo $ps; ?>"><br>
        <input type="checkbox" name="rm"> Remember me<br>
        <input type="submit" name="btn_sb" >    </form>  </b>



        <div class="container bg1 mt-3 pt-3 pb-3">
        
    </div>

    </form>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:57:24 GMT -->
</html>