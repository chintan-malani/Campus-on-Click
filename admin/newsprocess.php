<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}
	require '../common/dbconnect.php';
	var_dump($_POST);
	$news=$_POST['news'];
	$description=$_POST['description'];
	$doi = date("d-m-y H:i:s");
	$dou = date("d-m-y H:i:s");
	$isactive=1;
	$qry="INSERT INTO news(title,description,doi,dou,isactive) VALUES('".$news."','".$description."','".$doi."','".$dou."',$isactive)";
	echo "$qry";
	$rs=mysqli_query($conn,$qry);
	if ($rs) 
	{
		echo "Insert success";
	}
	else
	{
		echo "Insert Error";
	}

	 header("location:viewnews.php");

?>