<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}
	require '../common/dbconnect.php';
	var_dump($_POST);
	$semester=$_POST['semester'];
	$doi = date("d-m-y H:i:s");
	$dou = date("d-m-y H:i:s");
	$isactive=1;
	$qry="INSERT INTO semester(semester,dou,doi,isactive,course_id) VALUES('".$semester."','".$dou."','".$doi."',$isactive,'".$_POST['course']."')";

	$rs=mysqli_query($conn,$qry);
	if ($rs) 
	{
		header("location:viewsemester.php");
		exit();
	}
	else
	{
		echo "Insert Error";
	}

	

?>