<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}
	require '../common/dbconnect.php';
$qry="UPDATE notice SET isactive=2 where notice_id='".$_GET['id']."'";
	$rs=mysqli_query($conn,$qry);
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