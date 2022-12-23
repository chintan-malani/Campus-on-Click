<?php
session_start();
require '../common/dbconnect.php';
$qry="DELETE FROM security_question where sec_que_id='".$_GET['id']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewsecurityquestion.php");
	exit();
}
?>