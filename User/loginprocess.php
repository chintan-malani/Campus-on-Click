<?php 
	require '../common/dbconnect.php';
	session_start();
	var_dump($_POST);
	if(!isset($_POST["btn_sb"]))
	{
		header("location:login.php");
		exit();
	}
	
	
			$us=$_POST['email'];
			$ps=$_POST['pwd'];

	$qry="SELECT * FROM student WHERE email='".$us."' AND password='".$ps."' AND isactive=1 and usertype=1";

	echo "$qry";
	$rs=mysqli_query($conn,$qry);
	if (mysqli_num_rows($rs)>0)
	{
		$row=mysqli_fetch_assoc($rs);
		$id=$row['stu_id'];
		$course=$row['course_id'];
		$_SESSION['id']=$id;
		$_SESSION['cid']=$course;
		$_SESSION['sid']=$row['semester_id'];
		// $_SESSION['faculty']=1;
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