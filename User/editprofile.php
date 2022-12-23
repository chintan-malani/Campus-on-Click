<?php
session_start();
require '../common/dbconnect.php';
if(!isset($_SESSION['id']))
{
  header("location:login.php");
  exit();
}
$qry="UPDATE student SET first_name='".$_POST['fname']."',last_name='".$_POST['lname']."',email='".$_POST['email']."',contact='".$_POST['contact']."',department_id='".$_POST['department']."',course_id='".$_POST['course']."',semester_id='".$_POST['semester']."',enrollment_id='".$_POST['enroll']."',state_id='".$_POST['state']."',city_id='".$_POST['city']."',area_id='".$_POST['area']."' where stu_id='".$_SESSION['id']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{

	$_SESSION['cid']=$_POST['course'];
		$_SESSION['sid']=$row['semester'];
		echo "<script>alert('Profile Updated');</script>";
    echo "<script>window.location='profile.php';</script>";
    exit();	
}
?>