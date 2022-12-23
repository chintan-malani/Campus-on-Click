<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}
require '../common/dbconnect.php';
if(!isset($_POST['sb']))
{
	header("location:dashboard.php");
	exit();
}
$course=$_POST['course'];
$sem=$_POST['semester'];
$subject=$_POST['subject'];
$department=$_POST['department'];
$i=1;
$date=date('y-m-d');
$qry="INSERT INTO subject_detail(semester_id,course_id,subject_name,isactive,doi,dou,department_id) values('".$sem."','".$course."','".$subject."','".$i."','".$date."','".$date."','".$department."')";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewsubject.php");
	exit();
}

?>