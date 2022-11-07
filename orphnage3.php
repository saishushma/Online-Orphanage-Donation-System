<!DOCTYPE html>
<html>
<head>
<title>orphnage login</title>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div.af {
    border-radius: 5px;
       padding: 20px;
}
div{
	 background-color: #EBF4FA;
}
</style>
</head>
<body>

<img src="file://M:/se project/pic1.jpg" style="height:150px;width:15%;float:left;"></img>
<div style="height:150px;width:100%;margin-top=-20px;postion:relative;">
<h1 style="font-family:'Californian FB Bold';color:rgb(0, 167, 0);font-style:'italic';font-size:100px;text-align:center;
text-decoration:underline;margin-top=-20px;postion:relative;">ORPHNAGE LOGIN</h1>

<div id="af">
<?php
include 'o.php';
$oid=$_POST["orphnageid"];
$q="select *  from r2 where orphanageid=$oid";
$q1=mysqli_query($conn,$q);
$row=mysqli_fetch_object($q1);
if($row)
{
$n=$row->name;
$d=$row->time;
$di=$row->director;
$pno=$row->phno;
$p=$row->profession;
$c1=$row->count1;
$c2=$row->count2;
$c3=$row->count3;
$c4=$row->count4;
$c=$row->no;
$s=$row->staff;
$mq=$row->mreq;
$mc=$row->mrec;
$a=$row->acc;
$mno=$row->mno;
$dno=$row->dno;
$st=$row->street;
$ci=$row->city;
$sa=$row->state;
$p=$row->pincode;
?>
<form method="post" action="orphnage4.php" >
ORPHNAGE NAME:<input type="text" name="name" value="<?=$n?>" pattern="[A-Za-z]{1,}"><br/><br/>
TIME OF FUNDATION:<input type="date" name="time" value="<?=$d?>"><br/><br>
DIRECTOR NAME:<input type="text" name="director" value="<?=$di?>" pattern="[A-Za-z]{1,}"><br/><br/>
DIRECTOR PHONE NO:<input type="text" name="phno" value="<?=$pno?>" pattern="[7-9]{1}[0-9]{9}"><br/><br/>
PROFESSION :<input type="text" name="profession" value="<?=$p?>" pattern="[A-Za-z]{1,}"><br/><br/>
NO OF CHILDREN BELOW AGE 5:<input type="text" name="count1" value="<?=$c1?>"  pattern="[0-9]{1,}" maxlength="3"><br/><br/>
NO OF CHILDREN BETWEEN AGE 5 AND 10:<input type="text" name="count2" value="<?=$c2?>"  pattern="[0-9]{1,}" maxlength="3"><br/><br/>
NO OF CHILDREN BETWEEN AGE 10 AND 18:<input type="text" name="count3" value="<?=$c3?>"  pattern="[0-9]{1,}" maxlength="3"><br/><br/>
NO OF CHILDREN ABOVE AGE 18:<input type="text" name="count4" value="<?=$c4?>"  pattern="[0-9]{1,}" maxlength="3"><br/><br/>
NO OF CHILDREN:<input type="text" name="no" value="<?=$c?>"  pattern="[0-9]{1,}" maxlength="3"><br/><br/>
NO OF STAFF:<input type="text" name="staff" value="<?=$s?>"  pattern="[0-9]{1,}" maxlength="3"><br/><br/>
AVERAGE MONEY REQ PER YEAR:<input type="text" name="mreq" value="<?=$mq?>"  pattern="[0-9]{1,}" maxlength="7"><br/><br/>
AVERAGE FUNDS RECEIVED PER YEAR:<input type="text" name="mrec" value="<?=$mc?>"  pattern="[0-9]{1,}" maxlength="7"><br/><br/>
BANK ACCOUNT:<input type="text" name="acc" value="<?=$a?>" pattern="[0-9]{10}"><br/><br/>
MOBILE NO:<input type="text" name="mno" value="<?=$mno?>" pattern="[7-9]{1}[0-9]{9}"><br/><br/>
DOOR NO:<input type="text" name="dno" value="<?=$dno?>" maxlength="10"><br/><br/>
STREET:<input type="text" name="street" value="<?=$st?>" pattern="[A-Za-z]{1,}"><br/><br/>
CITY:<input type="text" name="city" value="<?=$ci?>" pattern="[A-Za-z]{1,}"><br/><br/>
STATE:<input type="text" name="state" value="<?=$sa?>" pattern="[A-Za-z]{1,}"><br/><br/>
PIN CODE:<input type="text" name="pincode" value="<?=$p?>" pattern="[0-9]{6}"><br/><br/>
<input name="orphnageid" value="<?=$oid?>" type="hidden">
<input type="submit" value="Submit">
</form>
</div>
<?php
}
else
{?>
	<img src="file://M:/se project/p3.gif" style="height:300px;width:100%;float:left;"></img>
<?php
}
?>
</body>
</html>
