<?php
session_start();
require '../common/dbconnect.php';
$qry="UPDATE course SET department_id='".$_POST['d_id']."',course_name='".$_POST['course']."' where course_id='".$_POST['course_id']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewcourse.php");
	exit();
}
?>