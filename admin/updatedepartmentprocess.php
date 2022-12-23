<?php
session_start();
require '../common/dbconnect.php';
$qry="UPDATE department SET name='".$_POST['department']."' where department_id='".$_POST['d_id']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewdepartment.php");
	exit();
}
?>