<!doctype html>
<html>
<head>
<title>sample</title>
</head>
<body>
<?php 
include 'o.php';
$q1="INSERT INTO `r2` (`name`, `time`, `director`, `phno`, `profession`, `count1`, `count2`, `count3`, `count4`, `no`, `staff`, `mreq`,
 `mrec`, `acc`, `mno`, `dno`, `street`, `city`, `state`, `pincode`, `orphanageid`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''), ('mother therisa', '2017-11-13', 'shushma', '9440686677', 'doctor', '434', '4', '7', '12', '25', '21', '2323',
 '23000', 'hfuegx 4hu xu b', '9959965627', '10-21', 'santhapet', 'ethamukkala', 'Andhra  pradesh', '523280', '25')";
 $p2=mysqli_query($conn,$q1);
 ?>
 
 $q5="UPDATE r2 SET name='$n',time='$d',director='$di',phno='$pno',profession='$p',count1='$c1',count2='$c2',count3='$c3',count4='$c4',no='$c',staff='$s',
mreq='$mq',mrec='$mc',acc='$a',mno='$mno',dno='$dno',street='$st',city='$ci',state='$sa',pincode='$p' where name='$n1' AND time='$d1' AND director='$di1' AND phno='$pno1' AND 
profession='$p1' AND count1='$c11' AND count2='$c21' AND count3='$c31' AND count4='$c41' AND no='$c1' AND staff='$s1' AND 
mreq='$mq1' AND mrec='$mc1' AND acc='$a1' AND mno='$mno1' AND dno='$dno1' AND street='$st1' AND city='$ci1' AND state='$sa1' AND pincode='$p1' AND orphnageid='$n2'";