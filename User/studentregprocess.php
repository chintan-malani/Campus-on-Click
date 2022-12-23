<?php
	require '../common/dbconnect.php';
	//var_dump($_POST);
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$enroll=$_POST['enroll'];
	$contact=$_POST['contact'];
	$department=$_POST['department'];
	$course=$_POST['course'];
	$semester=$_POST['semester'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$area=$_POST['area'];
	$securityquestion=$_POST['securityquestion'];
	$answer=$_POST['answer'];
	$pwd=$_POST['pwd'];
	$cpwd=$_POST['cpwd'];
	$date=date('y-m-d');
	if($cpwd != $pwd)
	{
		echo "<script>alert('Password and Confirm password is not match');</script>";
		echo "<script>window.location='registration.php'</script>";
		exit();
	}
	//$dou = date("d-m-y H:i:s");
	$isactive=1;
	// $qry="INSERT INTO student(first_name,last_name,email,contact,department_id,semester_id,sec_que_ans,answer,password,isactive,doi,dou,enrollment_id,state_id,city_id,area_id) VALUES('".$fname."','".$lname."','".$email."','".$enroll."','".$contact."','".$department."','".$course."','".$semester."','".$securityquestion."','".$answer."','".$pwd."','".$state."','".$city."','".$area."','".$doi."','".$doi."',$isactive)";
	$qry="INSERT INTO student(first_name,last_name,email,contact,department_id,sec_que_ans,answer,password,enrollment_id,state_id,city_id,semester_id,area_id,isactive,usertype,course_id,doi)VALUES('".$fname."','".$lname."','".$email."','".$contact."','".$department."','".$securityquestion."','".$answer."','".$pwd."','".$enroll."','".$state."','".$city."','".$semester."','".$area."',1,1,'".$course."','".$date."')";
	$rs=mysqli_query($conn,$qry);
	 // echo "$qry";
	if ($rs) 
	{
		echo "Insert success";
		header("location:login.php");
	}
	else
	{
		echo "Insert Error";
	}

	

?>