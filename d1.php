<div style="height:150px;width:100%;margin-top=-20px;postion:relative;">
<img src="file://M:/se project/pic1.jpg" style="height:150px;width:15%;float:left;"></img>
<h1 style="font-family:'Californian FB Bold';color:rgb(0, 167, 0);font-style:'italic';font-size:100px;
text-align:center;text-decoration:underline;margin-top=-20px;postion:relative;">MAKE A DONATION</h1>
<?php
include 'o.php';
$d=$_POST['donate'];
$o=$_POST['oid'];
$name=$_POST['dname'];
$job=$_POST['job'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$income=$_POST['income'];
$address=$_POST['address'];
$q="select *  from r2 where orphanageid=$o";
$q1=mysqli_query($conn,$q);
$row=mysqli_fetch_object($q1);
if($row)
{if($d=="money")
{
echo "<p style='font-size:25px;font-family:'Gabriola''>Account number of the orphnage selected is:$row->acc<br>";
echo "Following are some of the links to transfer money:<br></p>
<p style='font-size:20px;font-family:'Gabriola''>TO transfer money through SBI:
<a href='https://www.sbi.co.in' target='_blank'>state bank</a><br>
TO transfer through another banks:
<a href='http://itzcash.com/consumer-solutions/cards/money-transfer' target='_blank'>others</a>";
}
if($d=="items")
{
echo "<p style='font-size:25px;font-family:'Gabriola''>The address of the orphnage u selectd is <br>
DOOR NO:$row->dno<br>
STREET:$row->street<br>
CITY:$row->city<br>
STATE:$row->state<br>
PINCODE:$row->pincode<br></p>";
echo "<p style='font-size:20px;font-family:'Gabriola''>IF u buy the items in online shopping sites u can go through following links:<br>
If want to buy in flipkart:
<a href='https://www.flipkart.com'  target='_blank'>FLIPKART</a><br>
If want to buy in amazon:
<a href='https://www.amazon.in' target='_blank'>AMAZON</a><br></p>";
}
if($d=="adoption")
{
	echo "<p style='font-size:25px;font-family:'Gabriola''>The details of the orphanage organiser:<br>
	ORPHNAGE DIRECTOR:$row->director<br>
	DIRECTOR PHONE NUMBER:$row->phno<br>
	ORPHANAGE PHONE NUMBER:$row->mno<br>";
}
	
?>
<?php 
if($d=="money")
{?>
<p style="font-size:25px;font-family:'Gabriola'">

NOTE:please enter the transcation number then only it will be entered into database<br>
<form method="post" action="d3.php">
TRANSCTION ID:<input type="text" name="tid">
<input type="submit">
</form>
<?php 
$id=0;
$sq="select * from donars" ;
  $q2=mysqli_query($conn,$sq);
    $n1=mysqli_num_rows($q2);
	$n1=($n1+1);
$qi="INSERT INTO donars VALUES('$name','$job','$phno','$email','$income','$address','$o','$d','$id','$n1')";
$pi=mysqli_query($conn,$qi);

?>
<?php
}?>

<?php 
if($d=="items")
{?>

<p style="font-size:25px;font-family:'Gabriola'">NOTE:please enter the transcation id if it is ordered through online website .If they are send through post enter that id 
then only it will be entered into database<br>
<form method="post" action="d3.php">
TRANSCATION ID:<input type="text" name="tid">
<input type="submit">
</form>
<?php 
$id=0;
$sq="select * from donars" ;
  $q2=mysqli_query($conn,$sq);
    $n1=mysqli_num_rows($q2);
	$n1=($n1+1);
$qi="INSERT INTO donars VALUES('$name','$job','$phno','$email','$income','$address','$o','$d','$id','$n1')";
$pi=mysqli_query($conn,$qi);

?>
<?php
}?>

<?php 
if($d=="adoption")
{?>
<p style="font-size:25px;font-family:'Gabriola'">
NOTE:please enter the no of children u have adopted
then only it will be entered into database<br>
<form method="post" action="d3.php">
NO OF CHILDREN:<input type="text" name="tid">
<input type="submit">
</form>
<?php 
$id=0;
$sq="select * from donars" ;
  $q2=mysqli_query($conn,$sq);
    $n1=mysqli_num_rows($q2);
	$n1=($n1+1);
$qi="INSERT INTO donars VALUES('$name','$job','$phno','$email','$income','$address','$o','$d','$id','$n1')";
$pi=mysqli_query($conn,$qi);

?>
<?php
}}
else
{?>
<img src="file://M:/se project/p4.gif" style="height:200px;width:100%;"></img>
<?php 
}?>
