<?php
session_start();
require '../common/dbconnect.php';
if(!isset($_SESSION['id']))
{
	header("location:login.php");
	exit();
}
if(!isset($_POST['submit']))
{
	header("location:index.php");
	exit();
}
$date=date('y-m-d');
if($_FILES['image']['name'] =="")
{
	$qry="UPDATE faculty SET firstname='".$_POST['fn']."',lastname='".$_POST['ln']."',email='".$_POST['email']."',contact='".$_POST['contact']."',department_id='".$_POST['department']."',course_id='".$_POST['course']."',isactive=1,dou='".$date."' where faculty_id='".$_SESSION['id']."'";

}
else
{
	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

	$qry="UPDATE faculty SET firstname='".$_POST['fn']."',lastname='".$_POST['ln']."',email='".$_POST['email']."',contact='".$_POST['contact']."',department_id='".$_POST['department']."',course_id='".$_POST['course']."',isactive=1,dou='".$date."',profile_pic='".$target_file."' where faculty_id='".$_SESSION['id']."'";
}
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:manageprofile.php");
	exit();
}
?>