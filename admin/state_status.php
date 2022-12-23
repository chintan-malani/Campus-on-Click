<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
} 
 require '../common/dbconnect.php';
 $id=$_GET['id'];
 $select="select * from state where state_id=$id";
 $query=mysqli_query($conn,$select);
 $row=mysqli_fetch_assoc($query);
 $ia=$row['isactive'];
 echo $ia;
   if ($ia==1) {
   	$update="update state set isactive=0 where state_id=$id";
   }
   else{
   	$update="update state set isactive=1 where state_id=$id";
   }
   $query2=mysqli_query($conn,$update);
    if ($query2) {
    	echo "update";
    	header("location:viewstate.php");
    	exit();
    }
    else{
    	echo "Error";
    }
 ?>