<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
}
	require '../common/dbconnect.php';
	var_dump($_POST);
	$question=$_POST['securityquestion'];
	$doi = date("d-m-y H:i:s");
	$dou = date("d-m-y H:i:s");
	$isactive=1;
	$qry="INSERT INTO security_question(question,dou,doi,isactive) VALUES('".$question."','".$dou."','".$doi."',$isactive)";
	$rs=mysqli_query($conn,$qry);
	if ($rs) 
	{
		echo "Insert success";
	}
	else
	{
		echo "Insert Error";
	}

	header("location:viewsecurityquestion.php");

?>