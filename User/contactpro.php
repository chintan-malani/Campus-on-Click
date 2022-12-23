<?php
require '../common/dbconnect.php';
if(!isset($_POST['submit']))
{
	header("location:index.php");
	exit();
}
$date=date('y-m-d');
$qry="INSERT INTO contact(name,email,contact_no,doi,message) values('".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$date."','".$_POST['message']."')";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "<script>alert('Contact Submited');</script>";
	echo "<script>window.location='index.php';</script>";
	exit();
}
?>