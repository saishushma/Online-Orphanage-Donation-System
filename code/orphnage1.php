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
<form method="post" action="o1.php" >
ORPHNAGE NAME:<input type="text" name="name" value="<?php $n?>"><br/><br/>
TIME OF FUNDATION:<input type="date" name="time"><br/><br>
DIRECTOR NAME:<input type="text" name="director"><br/><br/>
DIRECTOR PHONE NO:<input type="text" name="phno"><br/><br/>
PROFESSION :<input type="text" name="profession"><br/><br/>
NO OF CHILDREN BELOW AGE 5:<input type="text" name="count1"><br/><br/>
NO OF CHILDREN BETWEEN AGE 5 AND 10:<input type="text" name="count2"><br/><br/>
NO OF CHILDREN BETWEEN AGE 10 AND 18:<input type="text" name="count3"><br/><br/>
NO OF CHILDREN ABOVE AGE 18:<input type="text" name="count4"><br/><br/>
NO OF CHILDREN:<input type="text" name="no"><br/><br/>
NO OF STAFF:<input type="text" name="staff"><br/><br/>
AVERAGE MONEY REQ PER YEAR:<input type="text" name="mreq"><br/><br/>
AVERAGE FUNDS RECEIVED PER YEAR:<input type="text" name="mrec"><br/><br/>
BANK ACCOUNT:<input type="text" name="acc"><br/><br/>
MOBILE NO:<input type="text" name="mno"><br/><br/>
DOOR NO:<input type="text" name="dno"><br/><br/>
STREET:<input type="text" name="street"><br/><br/>
CITY:<input type="text" name="city"><br/><br/>
STATE:<input type="text" name="state"><br/><br/>
PIN CODE:<input type="text" name="pincode"><br/><br/>
<input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
