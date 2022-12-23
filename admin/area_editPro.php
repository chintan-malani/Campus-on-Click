<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
} 
 require '../common/dbconnect.php';
 if (!isset($_POST['btn_sb'])) {
 	header("location:viewarea.php");
 	exit();
 }

$sid=$_POST['sid'];
$sname=$_POST['sname'];
$dou=date('d/m/y  h:i:s');

$update="update area set area_name='".$sname."' , dou='".$dou."' where area_id=$sid";
$query=mysqli_query($conn,$update);
if ($query) {
	echo "up";
	header("location:viewarea.php");
	exit();
}
else{
	echo "error";
}


 ?>