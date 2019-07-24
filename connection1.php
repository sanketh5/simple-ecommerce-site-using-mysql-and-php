<?php
$servername="localhost";
$username="id10009619_sanketh"; 
$password="vnsan55555";
$dbname="project";
$q=mysqli_connect($servername,$username,$password,$dbname);
if(isset($q))
echo  "";
else
	die("db not connected".mysqli_connect_error());
?>