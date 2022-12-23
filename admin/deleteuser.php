<?php
session_start();
require '../common/dbconnect.php';
$qry="DELETE FROM student where stu_id='".$_GET['sid']."'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewstudenttable.php");
	exit();
}
?>