<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}
	require '../common/dbconnect.php';
	var_dump($_POST);
	$department=$_POST['department'];
	// $description=$_POST['description'];
	$doi = date("d-m-y H:i:s");
	$dou = date("d-m-y H:i:s");
	$isactive=1;
	$qry="INSERT INTO department(name,doi,dou,isactive) VALUES('".$department."','".$dou."','".$doi."',$isactive)";
	$rs=mysqli_query($conn,$qry);
	// echo "$qry";
	if ($rs) 
	{
		echo "Insert success";
	}
	else
	{
		echo "Insert Error";
	}

	header("location:viewdepartment.php");

?>