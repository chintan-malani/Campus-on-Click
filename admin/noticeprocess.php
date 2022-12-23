<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}
	require '../common/dbconnect.php';
	var_dump($_POST);
	$notice=$_POST['notice'];
	$description=$_POST['description'];
	$doi = date("d-m-y H:i:s");
	$dou = date("d-m-y H:i:s");
	$isactive=1;
	$qry="INSERT INTO notice(title,description,doi,dou,isactive) VALUES('".$notice."','".$description."','".$dou."','".$doi."',$isactive)";
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

	header("location:viewnotice.php");

?>