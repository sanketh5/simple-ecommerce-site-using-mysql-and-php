<?php
include "connection.php";
error_reporting(0);

?>
<?php
session_name("session1");
session_start();
$c = $_SESSION["user"];
session_destroy();
$query = "SELECT * FROM LOGIN WHERE username='$c'";
$data1=mysqli_query($q,$query);
$r= mysqli_fetch_assoc($data1);
echo $r[firstname];
session_name("session");
session_start();
echo session_name();
$_SESSION["user1"]=4;
echo $_SESSION["user1"];
$_SESSION["user1"]=6;
echo $_SESSION["user1"];



?>
<?php
/*
session_id("session1");
session_start();
echo session_id();
$_SESSION["name"] = "1";
echo "<pre>", print_r($_SESSION, 1), "</pre>";
session_write_close();

session_id("session2");
echo session_id();
session_start();
$_SESSION["name"] = "2";
echo "<pre>", print_r($_SESSION, 1), "</pre>";
session_write_close();

session_id("session1");
echo session_id();
session_start();
echo "<pre>", print_r($_SESSION, 1), "</pre>";
session_write_close();

session_id("session2");
echo session_id();
session_start();
echo "<pre>", print_r($_SESSION, 1), "</pre>";
session_write_close(); */
?>