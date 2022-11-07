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
  <form method="post" action="o1.php" >
    <label for="fname">ORPHNAGE NAME</label>
    <input type="text" id="fname" name="name" placeholder="Name of the Orphanage" pattern="[A-Za-z]{1,}">

    <label for="fname">TIME OF FUNDATION</label>
    <input type="date" id="fname" name="time" placeholder="date on which orphnage is founded"></br><br/>
     <label for="fname">DIRECTOR NAME</label>
    <input type="text" id="fname" name="director" placeholder="founder of Orphanage" pattern="[A-Za-z]{1,}">

    <label for="fname">DIRECTOR PHONE NUMBER</label>
    <input type="text" id="fname" name="phno" placeholder="contact no of orphanage founder" pattern="[7-9]{1}[0-9]{9}">
    
     <label for="fname">DIRECTOR PROFESSION</label>
    <input type="text" id="fname" name="profession" placeholder="profession of orphanage founder" pattern="[A-Za-z]{1,}">

  
     <label for="fname">NO OF CHILDREN BELOW AGE 5</label>
    <input type="text" id="fname" name="count1" placeholder="three digit"  pattern="[0-9]{1,}" maxlength="3">
       
      <label for="fname">NO OF CHILDREN BETWEEN AGE 5 AND 10</label>
    <input type="text" id="fname" name="count2" placeholder=" no of orphanage children"  pattern="[0-9]{1,}" maxlength="3">

       <label for="fname">NO OF CHILDREN BETWEEN AGE 10 AND 18</label>
    <input type="text" id="fname" name="count3" placeholder=" no of orphanage children"  pattern="[0-9]{1,}" maxlength="3">
    
     <label for="fname">NO OF CHILDREN ABOVE AGE 18</label>
    <input type="text" id="fname" name="count4" placeholder=" no of orphanage children"  pattern="[0-9]{1,}" maxlength="3">
     
    <label for="fname">NO OF CHILDREN</label>
    <input type="text" id="fname" name="no" placeholder=" no of orphanage children max length=3"  pattern="[0-9]{1,}" maxlength="3">
     
      <label for="fname">NO OF STAFF</label>
    <input type="text" id="fname" name="staff" placeholder="no of staff working"   pattern="[0-9]{1,}" maxlength="3">
       
      <label for="fname">AVERAGE MONEY REQ PER YEAR</label>
    <input type="text" id="fname" name="mreq" placeholder="money required for orphanage children" pattern="[0-9]{1,}" maxlength="7">
     


   <label for="fname">AVERAGE FUNDS RECEIVED PER YEAR</label>
    <input type="text" id="fname" name="mrec" placeholder="money donated every year" pattern="[0-9]{1,}" maxlength="7">
     


 <label for="fname">BANK ACCOUNT</label>
    <input type="text" id="fname" name="acc" placeholder=" account of orphanage " pattern="[0-9]{10}">
     

 <label for="fname">MOBILE NO</label>
    <input type="text" id="fname" name="mno" placeholder=" mobile no of orphanage " pattern="[7-9]{1}[0-9]{9}">
     

 <label for="fname">DOOR NO</label>
    <input type="text" id="fname" name="dno" placeholder=" door no of orphanage" maxlength="10">
     

 <label for="fname">STREET</label>
    <input type="text" id="fname" name="street" placeholder=" street in which orphanage is there" pattern="[A-Za-z]{1,}">
     

 <label for="fname">CITY</label>
    <input type="text" id="fname" name="city" placeholder=" city in which orphanage is there" pattern="[A-Za-z]{1,}">
     

 <label for="fname">STATE</label>
    <input type="text" id="fname" name="state" placeholder=" state in orphanage is there with no space" pattern="[A-Za-z]{1,}">
     

 <label for="fname">PIN CODE</label>
    <input type="text" id="fname" name="pincode" placeholder=" pincode of ur area" pattern="[0-9]{6}">
     
  <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
