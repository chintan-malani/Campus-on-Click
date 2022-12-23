<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:login1.php");
    exit();
} 
 require '../common/dbconnect.php';
 $id=$_GET['id'];
 $select="select * from city where city_id=$id";
 $query=mysqli_query($conn,$select);
 $row=mysqli_fetch_assoc($query);
 $ia=$row['isactive'];
 echo $ia;
   if ($ia==1) {
   	$update="update city set isactive=0 where city_id=$id";
   }
   else{
   	$update="update city set isactive=1 where city_id=$id";
   }
   $query2=mysqli_query($conn,$update);
    if ($query2) {
    	echo "update";
    	header("location:viewcity.php");
    	exit();
    }
    else{
    	echo "Error";
    }
 ?>