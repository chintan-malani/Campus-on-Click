<?php
session_start();
require '../common/dbconnect.php';
$qry="UPDATE security_question SET question='".$_POST['securityquestion']."' where sec_que_id='".$_POST['sid']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewsecurityquestion.php");
	exit();
}
?>