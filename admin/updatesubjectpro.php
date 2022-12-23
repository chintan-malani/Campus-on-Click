<?php
session_start();
require '../common/dbconnect.php';
$date=date('y-m-d');
$qry="UPDATE subject_detail SET department_id='".$_POST['department']."',semester_id='".$_POST['semester']."',course_id='".$_POST['course']."',subject_name='".$_POST['subject']."',dou='".$date."' where subject_id='".$_POST['sub_id']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewsubject.php");
	exit();
}
?>