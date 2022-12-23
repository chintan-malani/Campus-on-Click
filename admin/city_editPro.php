<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
} 
 require '../common/dbconnect.php';
 if (!isset($_POST['btn_sb'])) {
 	header("location:viewcity.php");
 	exit();
 }

$sid=$_POST['sid'];
$sname=$_POST['sname'];
$dou=date('d/m/y  h:i:s');

$update="update city set city_name='".$sname."' , dou='".$dou."' where city_id=$sid";
$query=mysqli_query($conn,$update);
if ($query) {
	echo "up";
	header("location:viewcity.php");
	exit();
}
else{
	echo "error";
}


 ?>