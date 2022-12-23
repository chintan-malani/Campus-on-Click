<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}
require '../common/dbconnect.php';
$qry="DELETE FROM semester where semester_id='".$_GET['id']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewsemester.php");
	exit();
}
?>