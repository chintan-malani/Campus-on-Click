<?php
session_start();
require '../common/dbconnect.php';
if(!isset($_POST['submit']))
{
	header("location:index.php");
	exit();
}

$target_dir = "material/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

$i=1;
$date=date('y-m-d');
$qry="INSERT INTO material_share_details(department_id,course_id,semester_id,subject_id,faculty_id,title,material_pdf,description,isactive,doi,dou) values('".$_SESSION['did']."','".$_SESSION['cid']."','".$_POST['semester']."','".$_POST['subject']."','".$_SESSION['fid']."','".$_POST['title']."','".$target_file."','".$_POST['description']."',$i,'".$date."','".$date."')";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewmaterail.php");
	exit();
}
?>