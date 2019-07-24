<?php

session_start();
$r=$_SESSION['user'];
require "connection.php";
$query5="SELECT * FROM ORDERS WHERE name='$r'";
$data5=mysqli_query($q,$query5);
$c=1;
while($r5=mysqli_fetch_assoc($data5))
{
	$b = $r5['orderstyle'];
	$a = $r5['status'];
	
	echo nl2br("'$c  .. ' .$b        ---------".$a."\n\n\n");
	$c = $c+1;

}

?>