<?php
$x=$_POST['comments'];
$n=$_POST['name'];
include 'o.php';
$qi="INSERT INTO comments VALUES('$x','$n')";
$pi=mysqli_query($conn,$qi);
?>
<img src="file://M:/se project/p6.jpg" style="height:100%;width:100%;"></img>  