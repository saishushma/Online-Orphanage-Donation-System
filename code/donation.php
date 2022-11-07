<!doctype html>
<html>
<head>
<title>donation</title>
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
<div style="height:150px;width:100%;margin-top=-20px;postion:relative;">
<img src="file://M:/se project/pic1.jpg" style="height:150px;width:15%;float:left;"></img>
<h1 style="font-family:'Californian FB Bold';color:rgb(0, 167, 0);font-style:'italic';font-size:100px;
text-align:center;text-decoration:underline;margin-top=-20px;postion:relative;">MAKE A DONATION</h1>
<form method="post" action="d1.php">
NAME:<input type="text" name="dname" pattern="[A-Za-z]{1,}"><br><br>
JOB:<input type="text" name="job" pattern="[A-Za-z]{1,}"><br><br>
PHNO:<input type="text" name="phno" pattern="[7-9]{1}[0-9]{9}"><br><br>
EMAIL ID:<input type="email" name="email"><br><br>
ANNUAL INCOME:<input type="text" name="income" pattern="[0-9]{1,}"><br><br>
ADDRESS:<input type="text" name="address" pattern="[A-Za-z]{1,}"><br><br>
ENTER ORPHNAGE ID:<input type="int" name="oid" ><br><br>(*if u dont know orphnage id please goto orphanages list*)<br><br>
WHAT DO U WANT TO DONATE:<br><br>
<input type="radio" name="donate" value="money" checked> MONEY
<input type="radio" name="donate" value="items"> ITEMS
<input type="radio" name="donate" value="adoption"> ADOPTION<br><br>
<input type="submit"><br><br>



</body>
</html>
