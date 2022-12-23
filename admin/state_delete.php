<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
} 
require '../common/dbconnect.php';
if (!isset($_GET['id'])) {
	header("location:viewstate.php");
	exit();
}
$id=$_GET['id'];
$update="update state set  isactive=2 where state_id=$id";
$query=mysqli_query($conn,$update);
if ($query) {
	header("location:viewstate.php");
  	echo "deleted";
}
else{
	echo "error";
}

 ?>