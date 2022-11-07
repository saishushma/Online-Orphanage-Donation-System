<!doctype html>
<html>
<head>
<title>my form</title>
</head>
<body>

 
<form>
ORPHNAGE NAME:<input type="text" name="name"><br/><br/>
TIME OF FUNDATION:<input type="date" name="time"><br/><br>
DIRECTOR NAME:<input type="text" name="director"><br/><br/>
<input type="submit" ><br/><br/>
</form>


<?php
include 's2.php';
$n=$_GET["name"];
$t=$_GET["time"];
$d=$_GET["director"];
 $stmt="INSERT INTO r1  VALUES ('$n','$t','$d')";
    $q2=mysqli_query($conn,$stmt);
    if($q2)
    {
      echo "signup completed";
	  echo "<br/>";
    }
    else {
      echo "not completed <br>".mysqli_error($conn);
    }

?>
</body>
</html>
