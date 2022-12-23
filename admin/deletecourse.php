<?php
session_start();
require '../common/dbconnect.php';
$qry="DELETE FROM course where course_id='".$_GET['id']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewcourse.php");
	exit();
}
?>