<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
} 
require '../common/dbconnect.php';
if (!isset($_GET['id'])) {
	header("location:viewcity.php");
	exit();
}
$id=$_GET['id'];
$update="update city set  isactive=2 where city_id=$id";
$query=mysqli_query($conn,$update);
if ($query) {
	header("location:viewcity.php");
  	echo "deleted";
}
else{
	echo "error";
}

 ?>