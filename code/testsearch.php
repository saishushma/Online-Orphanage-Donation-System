<!doctype html>
<html>
<head>
<title>orphnage list</title>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: rgb(255, 237, 249);}

#customers tr:hover {background-color:#b4b4b4;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:#4CAF50;
    color: white;
}
</style>
</head>

<body>
<img src="file://M:/se project/pic1.jpg" style="height:150px;width:15%;float:left;"></img>
<div style="height:150px;width:100%;margin-top=-20px;postion:relative;">
<h1 style="font-family:'Californian FB Bold';color:rgb(0, 167, 0);font-style:'italic';font-size:100px;text-align:center;text-decoration:underline;margin-top=-20px;postion:relative;">ORPHNAGE DETAILS</h1>
</div>
<table  id="customers">
<tr>
<th>ORPHNAGE NAME</th>
<th>TIME OF ORPHNAGE FOUNDATION</th>
<th>DIRECTOR</th>
<th>DIRECTOR PHONE NUMBER</th>
<th>DIRECTOR PROFSSION</th>
<th>AGE LESS THAN 5</th>
<th>AGE BETWEEN 5 1ND 10</th>
<th>AGE BETWEEN 10 AND 18</th>
<th>AGE ABOVE 18</th>
<th>total number</th>
<th>NO OF STAFF</th>
<th>MONEY REQUIRED PER YEAR</th>
<th>MONEY RECEIVED PER YEAR</th>
<th>ACCOUNT NUMBER</th>
<th>MOBILE NUMBER</th>
<th>DOOR NO</th>
<th>STREET</th>
<th>CITY</th>
<th>STATE</th>
<th>PINCODE</th>
<th>ORPHNAGE ID</th>
</tr>
<?php
include 'o.php';
$q="select *  from r2";
$q1=mysqli_query($conn,$q);
while($row=mysqli_fetch_object($q1))
{
?>
<tr>
<td><?php echo $row->name;?></td>
<td><?php echo $row->time;?></td>
<td><?php echo $row->director;?></td>
<td><?php echo $row->phno;?></td>
<td><?php echo $row->profession;?></td>
<td><?php echo $row->count1;?></td>
<td><?php echo $row->count2;?></td>
<td><?php echo $row->count3;?></td>
<td><?php echo $row->count4;?></td>
<td><?php echo $row->no;?></td>
<td><?php echo $row->staff;?></td>
<td><?php echo $row->mreq;?></td>
<td><?php echo $row->mrec;?></td>
<td><?php echo $row->acc;?></td>
<td><?php echo $row->mno;?></td>
<td><?php echo $row->dno;?></td>
<td><?php echo $row->street;?></td>
<td><?php echo $row->city;?></td>
<td><?php echo $row->state;?></td>
<td><?php echo $row->pincode;?></td>
<td><?php echo $row->orphanageid;?></td>
</tr>
<?php }?>



</table>
</body>
</html>