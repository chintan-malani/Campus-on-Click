<?php
session_start();
require '../common/dbconnect.php';
if(!isset($_SESSION['id']))
{
	header("location:login.php");
}
if(!isset($_POST['submit']))
{
	header("location:feedback.php");
	exit();
}
$date=date('y-m-d');
$qry="INSERT INTO feedback (student_id,message,isactive,doi,faculty_id) values('".$_SESSION['id']."','".$_POST['feedback']."',1,'".$date."','".$_POST['faculty_id']."')";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "<script>alert('feedback successfully Add')</script>";
	echo "<script>window.location='feedback.php';</script>";
	exit();
}
?>