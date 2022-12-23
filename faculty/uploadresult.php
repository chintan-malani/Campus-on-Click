<?php
session_start();
require '../common/dbconnect.php';
if(!isset($_POST['submit']))
{
	header("location:index.php");
	exit();
}
$qrys="SELECT * FROM student where stu_id='".$_POST['sid']."'";
$rss=mysqli_query($conn,$qrys);
$rows=mysqli_fetch_assoc($rss);


$target_dir = "result/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

$i=1;
$date=date('y-m-d');
$qry="INSERT INTO result(department_id,course_id,semester_id,isactive,doi,dou,marsheet_pic,student_id) values('".$rows['department_id']."','".$rows['course_id']."','".$rows['semester_id']."',1,'".$date."','".$date."','".$target_file."','".$_POST['sid']."')";
// echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:index.php");
	exit();
}
?>