
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
$n2=$_POST["orphnageid"];


$q="select *  from r2 where orphanageid=$n2";
$q1=mysqli_query($conn,$q);
$row=mysqli_fetch_object($q1);
$n1=$row->name;
$d1=$row->time;
$di1=$row->director;
$pno1=$row->phno;
$p1=$row->profession;
$c11=$row->count1;
$c21=$row->count2;
$c31=$row->count3;
$c41=$row->count4;
$c1=$row->no;
$s1=$row->staff;
$mq1=$row->mreq;
$mc1=$row->mrec;
$a1=$row->acc;
$mno1=$row->mno;
$dno1=$row->dno;
$st1=$row->street;
$ci1=$row->city;
$sa1=$row->state;
$p1=$row->pincode;
$q5="UPDATE `r2` SET `name` = '$n', `time` = '$d', `director` = '$di', `phno` = '$pno', `profession` = '$p', `count1` = '$c1',
 `count2` = '$c2', `count3` = '$c3', `count4` = '$c4', `no` = '$c', `staff` = '$s', `mreq` = '$mq', `mrec` = 'mc', `acc` = '$a', `mno` = '$mno',
 `dno` = '$dno', `street` = '$st', `city` = '$ci', `state` = '$sa', `pincode` = '$p', `orphanageid` = '$n2' WHERE `r2`.`name` = '$n1' AND
 `r2`.`time` = '$d1' AND `r2`.`director` = '$di1' AND `r2`.`phno` = '$pno1' AND `r2`.`profession` = '$p1' AND `r2`.`count1` = '$c11' AND `r2`.`count2` = '$c21' AND
 `r2`.`count3` = '$c31' AND `r2`.`count4` = '$c41' AND `r2`.`no` = '$c1' AND `r2`.`staff` = '$s1' AND `r2`.`mreq` = '$mq1' AND `r2`.`mrec` = '$mc1' AND `r2`.`acc` = '$a1' AND
 `r2`.`mno` = '$mno1' AND `r2`.`dno` = '$dno1' AND `r2`.`street` = '$st1' AND `r2`.`city` = '$ci1' AND `r2`.`state` = '$sa1' AND `r2`.`pincode` = '$p1' AND `r2`.`orphanageid` =$n2 LIMIT 1;"; 


 $p2=mysqli_query($conn,$q5);
if($q5)
    {?>
     
	<img src="file://M:/se project/p2.jpg" style="height:100%;width:100%;"></img>  
 <?php   }
    else {
      echo "PLEASE ENTER NAME OF THE ORPHNAGE ELSE SIGN UP WILL NOT COMPLETE";
    }


	?>