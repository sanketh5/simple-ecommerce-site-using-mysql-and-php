<?php
error_reporting(0);
include "connection.php";
$query4="SELECT * FROM IMAGES WHERE value='$a' && maincategory='$b' && subcategory='$c'";
$data4=mysqli_query($q,$query4);
while($r4= mysqli_fetch_assoc($data4))
{
$a="images1/".$r4['filename'];
echo "<img src='$a'>";
}
?>
