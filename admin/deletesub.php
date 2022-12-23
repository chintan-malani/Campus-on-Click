<?php
session_start();
require '../common/dbconnect.php';
$qry="DELETE FROM subject_detail where subject_id='".$_GET['id']."'";
echo $qry;

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewsubject.php");
	exit();
}
?>