<?php
session_start();
require '../common/dbconnect.php';
$qry="DELETE FROM feedback where feedback_id='".$_GET['id']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewfeedback.php");
	exit();
}
?>