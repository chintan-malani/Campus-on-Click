<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}
	require '../common/dbconnect.php';
	var_dump($_POST);
	$sname=$_POST['areaname'];
	$doi = date("d-m-y H:i:s");
	$dou = date("d-m-y H:i:s");
	$isactive=1;
	$qry="INSERT INTO area(area_name,dou,doi,isactive,city_id,state_id) VALUES('".$sname."','".$dou."','".$doi."',$isactive,'".$_POST['city_id']."','".$_POST['state_id']."')";
	$rs=mysqli_query($conn,$qry);
	if ($rs) 
	{
		echo "Insert success";
	}
	else
	{
		echo "Insert Error";
	}

	header("location:viewarea.php");

?>