<?php
require '../common/dbconnect.php';
if(!isset($_POST['btn_sb']))
{
	header("location:register.php");
	exit();
}
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$i=1;
$date=date('y-m-d');

if($_POST['pass'] != $_POST['cpass'])
{
	echo "<script>alert('Password and confirm password is not match')</script>";
	echo "<script>window.location='register.php'</script>";
	exit();
}
$qry="INSERT INTO faculty (firstname,lastname,email,contact,department_id,course_id,profile_pic,sec_que_id,answer,password,isactive,doi,dou) values('".$_POST['fn']."','".$_POST['ln']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['department']."','".$_POST['course']."','".$target_file."','".$_POST['question']."','".$_POST['answer']."','".$_POST['pass']."',$i,'".$date."','".$date."')";

$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "<script>alert('successfully reigster')</script>";
	echo "<script>window.location='login.php'</script>";
	exit();
}
?>