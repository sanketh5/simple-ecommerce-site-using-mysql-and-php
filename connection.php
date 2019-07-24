<?php
$servername="localhost";
$username="root"; 
$password="";
$dbname="project";
$q=mysqli_connect($servername,$username,$password,$dbname);
if(isset($q))
echo  "";
else
	die("db not connected".mysqli_connect_error());
?>