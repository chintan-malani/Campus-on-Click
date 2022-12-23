<?php
session_start();
require '../common/dbconnect.php';
if(!isset($_GET['id'])){
	header("location:index.php");
	exit();
}
$qry="UPDATE material_share_details SET isactive=2 where material_id='".$_GET['id']."'";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewmaterail.php");
	exit();
}
?>