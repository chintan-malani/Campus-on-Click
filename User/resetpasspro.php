<?php
require '../common/dbconnect.php';
if(!isset($_POST['btn_sb']))
{
	header("location:email.php");
	exit();
}
if($_POST['pass'] != $_POST['cpass'])
{
	 echo "<script>alert('Password and Confirm Password is not metch);</script>";;
    echo "<script>window.location='email.php';</script>";;
    exit();
}
$qry="UPDATE student SET password='".$_POST['pass']."' where email='".$_POST['email']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
 	echo "<script>alert('Password Updated');</script>";
    echo "<script>window.location='login.php';</script>";
    exit();
  }
?>