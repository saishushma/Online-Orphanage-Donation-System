<div style="height:150px;width:100%;margin-top=-20px;postion:relative;">
<img src="file://M:/se project/pic1.jpg" style="height:150px;width:15%;float:left;"></img>
<h1 style="font-family:'Californian FB Bold';color:rgb(0, 167, 0);font-style:'italic';font-size:80px;
text-align:center;text-decoration:underline;margin-top=-20px;postion:relative;">ORPHNAGE ENROLLEMENT</h1>
</div>
<?php
include 'o.php';
$n=$_POST["name"];
$d=$_POST["time"];
$di=$_POST["director"];
$pno=$_POST["phno"];
$p=$_POST["profession"];
$c1=$_POST["count1"];
$c2=$_POST["count2"];
$c3=$_POST["count3"];
$c4=$_POST["count4"];
$c=$_POST["no"];
$s=$_POST["staff"];
$mq=$_POST["mreq"];
$mc=$_POST["mrec"];
$a=$_POST["acc"];
$mno=$_POST["mno"];
$dno=$_POST["dno"];
$st=$_POST["street"];
$ci=$_POST["city"];
$sa=$_POST["state"];
$p=$_POST["pincode"];
 $sq="select * from r2;";
if($n)  
{  $q2=mysqli_query($conn,$sq);
    $n1=mysqli_num_rows($q2);
    $n2=($n1+1);
$q1="INSERT INTO r2 VALUES('$n','$d','$di','$pno','$p','$c1','$c2','$c3','$c4','$c','$s','$mq','$mc','$a','$mno','$dno','$st','$ci','$sa','$p','$n2')";
$p1=mysqli_query($conn,$q1);
if($q1)
    {
      echo "<p style='font-size:25px;font-family:'Gabriola';color:rgb(208, 99, 117)'>SIGN UP COMPLETED SUCESSFULLY<br/>";
	  echo "<p style='font-size:25px;font-family:'Gabriola';color:rgb(208, 99, 117)'>UR ORPHANAGE ID IS $n2";
	  echo "<br/>";
    }
    else {
      echo "<p style='font-size:25px;font-family:'Gabriola';color:rgb(208, 99, 117)'>PLEASE ENTER NAME OF THE ORPHNAGE ELSE SIGN UP WILL NOT COMPLETE";
    }
}
else {
      echo "<p style='font-size:25px;font-family:'Gabriola';color:rgb(208, 99, 117)'>PLEASE ENTER NAME OF THE ORPHNAGE ELSE SIGN UP WILL NOT COMPLETE";
    }
	?>