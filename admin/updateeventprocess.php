<?php
session_start();
require '../common/dbconnect.php';
$qry="UPDATE event SET event_name='".$_POST['event']."',description='".$_POST['description']."',place_of_event='".$_POST['venue']."' where event_id='".$_POST['e_id']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewevent.php");
	exit();
}
?>