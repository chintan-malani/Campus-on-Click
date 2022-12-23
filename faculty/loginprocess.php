<?php
session_start(); 
	require '../common/dbconnect.php';
	
	if(!isset($_POST["btn_sb"]))
	{
		header("location:login.php");
		exit();
	}
	
	$us=$_POST['txt_un'];
	$ps=$_POST['txt_ps'];

	$qry="SELECT * FROM faculty WHERE email='".$us."' AND password='".$ps."' AND isactive=1";


	$rs=mysqli_query($conn,$qry);
	if (mysqli_num_rows($rs)>0)
	{
		$row=mysqli_fetch_assoc($rs);
		$id=$row['faculty_id'];
		$did=$row['department_id'];
		$course=$row['course_id'];
		$_SESSION['fid']=$id;
		$_SESSION['cid']=$course;
		$_SESSION['did']=$did;
		
		$_SESSION['faculty']=1;
		if (isset($_POST['remember']))
		 {
			setcookie("user",$un,time() + (86400 * 30), "/"); 
			setcookie("pass",$ps,time() + (86400 * 30), "/"); 
		}
	 		header('location:index.php');
	 		exit();
	}
	 	else
	 	{
	 		echo "login error";
	 		exit();
	 	}
 ?>