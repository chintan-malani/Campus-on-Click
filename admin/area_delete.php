<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
} 
require '../common/dbconnect.php';
if (!isset($_GET['id'])) {
	header("location:viewarea.php");
	exit();
}
$id=$_GET['id'];
$update="update area set  isactive=2 where area_id=$id";
$query=mysqli_query($conn,$update);
if ($query) {
	header("location:viewarea.php");
  	echo "deleted";
}
else{
	echo "error";
}

 ?>