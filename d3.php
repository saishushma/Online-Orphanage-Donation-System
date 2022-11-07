<?php
include 'o.php';
include 'donation.php';
$sq="select * from donars" ;
  $q2=mysqli_query($conn,$sq);
    $n1=mysqli_num_rows($q2);
	$n1=($n1-1);
$id=$_POST['tid'];



	$sq2="select * from donars limit $n1,1";
	$q3=mysqli_query($conn,$sq2);
	$val=mysqli_fetch_object($q3);
	$v=$val->nd;
	$sq3="update donars set tid='$id' where nd=$v";
	$q4=mysqli_query($conn,$sq3);

?>
<img src="file://M:/se project/thankpic.jpg" width="100%" height="100%"></img>