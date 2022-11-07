<html>
<head>
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
    background-color:#ebf4fa;
    padding: 20px;
}
</style>
</head>
<body>
<div style="height:150px;width:100%;margin-top=-20px;postion:relative;">
<img src="file://M:/se project/pic1.jpg" style="height:150px;width:15%;float:left;"></img>
<h1 style="font-family:'Californian FB Bold';color:rgb(0, 167, 0);font-style:'italic';font-size:100px;
text-align:center;text-decoration:underline;margin-top=-20px;postion:relative;">MAKE A DONATION</h1>
<div id="af">
<form method="post" action="d1.php">

 
    <label for="fname"> NAME</label>
	<input type="text" name="dname">
	 <label for="fname">JOB</label>
	 <input type="text" name="job">
	 	  <label for="fname">PHONE NUMBER</label>
	  <input type="text" name="phno">
	   <label for="fname">EMAIL ID</label>
	   <input type="text" name="email">
	    <label for="fname">ANNUAL INCOME</label>
		<input type="text" name="income">
		 <label for="fname">ADDRESS</label>
		 
		 <input type="text" name="address">
		  <label for="fname">ORPHNAGE ID</label>
		  <input type="text" name="oid">
	 <label for="fname">WHAT DO U WANT TO DONATE:</label> 
<input type="radio" name="donate" value="money" checked> MONEY
<input type="radio" name="donate" value="items"> ITEMS
<input type="radio" name="donate" value="adoption"> ADOPTION<br><br>

		  
		  <input type="submit" value="Submit">
		  </form>
		  </body>
		  </html>
	
