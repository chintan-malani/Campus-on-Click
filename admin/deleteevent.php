<?php
session_start();
require '../common/dbconnect.php';
$qry="DELETE FROM event where event_id='".$_GET['id']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewevent.php");
	exit();
}
?>