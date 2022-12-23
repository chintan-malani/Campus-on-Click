<?php
session_start();
require '../common/dbconnect.php';
$qry="DELETE FROM faculty where faculty_id='".$_GET['id']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewfaculty.php");
	exit();
}
?>