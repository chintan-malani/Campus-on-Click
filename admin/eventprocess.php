<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}
	require '../common/dbconnect.php';
	var_dump($_POST);
	$event=$_POST['event'];
	$description=$_POST['description'];
	$venue=$_POST['venue'];
	$doi = date("d-m-y H:i:s");
	$dou = date("d-m-y H:i:s");
	$isactive=1;
	$qry="INSERT INTO event(event_name,description,place_of_event,doi,dou,isactive) VALUES('".$event."','".$description."','".$venue."','".$dou."','".$doi."',$isactive)";
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


	header("location:viewevent.php");

?>