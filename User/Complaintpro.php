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
$qry="INSERT INTO complain (student_id,subject,message,isactive,doi,faculty_id) values('".$_SESSION['id']."','".$_POST['subject']."','".$_POST['complain']."',1,'".$date."','".$_POST['faculty_id']."')";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "<script>alert('Complain successfully Add')</script>";
	echo "<script>window.location='complaint.php';</script>";
	exit();
}
?>