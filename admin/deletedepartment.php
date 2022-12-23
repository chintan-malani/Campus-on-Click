<?php
session_start();
require '../common/dbconnect.php';
$qry="DELETE FROM department where department_id='".$_GET['id']."'";
// echo $qry;

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewdepartment.php");
	exit();
}
?>