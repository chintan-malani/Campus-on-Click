<?php
$servername="localhost";
$username="root";
$password="";
$dbname="campus";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}

$db=mysqli_select_db($conn,$dbname);

if(!$db)
{
	echo "database not connected";
}

?>