<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}
	require '../common/dbconnect.php';
	var_dump($_POST);
	$course=$_POST['course'];
	$doi = date("d-m-y H:i:s");
	$dou = date("d-m-y H:i:s");
	$isactive=1;
	$d=$_POST['d_id'];
	$qry="INSERT INTO course(course_name,dou,doi,isactive,department_id) VALUES('".$course."','".$dou."','".$doi."',$isactive,'".$d."')";
	$rs=mysqli_query($conn,$qry);
	if ($rs) 
	{
		echo "Insert success";
	}
	else
	{
		echo "Insert Error";
	}

	header("location:viewcourse.php");

?>