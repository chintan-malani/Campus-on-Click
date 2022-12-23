<?php
session_start(); 
	require '../common/dbconnect.php';
	
	if(!isset($_POST["btn_sb"]))
	{
		header("location:login1.php");
		exit();
	}
	
	$us=$_POST['txt_un'];
	$ps=$_POST['txt_ps'];

	$qry="SELECT * FROM student WHERE email='".$us."' AND password='".$ps."' AND usertype=2 AND isactive=1";

	echo "$qry";
	$rs=mysqli_query($conn,$qry);
	if (mysqli_num_rows($rs)>0)
	{
		$row=mysqli_fetch_assoc($rs);
		$id=$row['stu_id'];
		 $email=$row['email'];
		 $password=$row['password'];
		 $_SESSION['aid']=$id;
		 $_SESSION['email']=$email;
		 $_SESSION['password']=$password;
		$_SESSION['admin']=2;
		if (isset($_POST['remember']))
		 {
		setcookie("user",$un,time() + (86400 * 30), "/"); 
		setcookie("pass",$ps,time() + (86400 * 30), "/"); 
		}
	 		header('location:dashboard2.php');
	 		exit();
	}
	 	else
	 	{
	 		echo "login error";
	 		exit();
	 	}
 ?>