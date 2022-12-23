<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}
	require '../common/dbconnect.php';
	//var_dump($_POST);
	$sname=$_POST['cityname'];
	$state_id=$_POST['state_id'];
	$doi = date("d-m-y H:i:s");
	//$dou = date("d-m-y H:i:s");
	$isactive=1;
	$qry="INSERT INTO city(city_name,dou,doi,state_id,isactive) VALUES('".$sname."','".$doi."','".$doi."','".$_POST['state_id']."',$isactive)";
	$rs=mysqli_query($conn,$qry);
	if ($rs) 
	{
		echo "Insert success";
	}
	else
	{
		echo "Insert Error";
	}

	header("location:viewcity.php");

?>